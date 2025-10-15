<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Http;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use Iahunter\JuniperMist\Exceptions\MistApiException;

class HttpClient
{
    private GuzzleClient $client;
    private string $baseUri;
    private ?string $apiToken;
    private array $defaultHeaders = [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ];

    private int $maxRetries = 3;
    private int $initialBackoffMs = 200;

    public function __construct(string $baseUri = 'https://api.mist.com/api/v1/', ?string $apiToken = null, array $guzzleOptions = [])
    {
        $this->baseUri = rtrim($baseUri, '/') . '/';
        $this->apiToken = $apiToken;
        $opts = array_merge([
            'base_uri' => $this->baseUri,
            'headers' => $this->buildAuthHeaders([]),
            'http_errors' => false,
            'timeout' => 30,
        ], $guzzleOptions);
        $this->client = new GuzzleClient($opts);
    }

    public function setApiToken(string $token): void
    {
        $this->apiToken = $token;
    }

    private function buildAuthHeaders(array $extra): array
    {
        $h = $this->defaultHeaders;
        if (!empty($this->apiToken)) {
            $h['Authorization'] = 'Token ' . $this->apiToken;
        }
        return array_merge($h, $extra);
    }

    public function request(string $method, string $path, ?array $query = null, ?array $json = null, array $headers = []): array
    {
        $method = strtoupper($method);
        if (str_starts_with($path, '/')) {
            $path = ltrim($path, '/');
        }
        $options = [
            'headers' => $this->buildAuthHeaders($headers),
        ];
        if (!empty($query)) {
            $options['query'] = $query;
        }
        if ($json !== null) {
            $options['json'] = $json;
        }

        $attempt = 0;
        while ($attempt <= $this->maxRetries) {
            try {
                $response = $this->client->request($method, $path, $options);
                $status = $response->getStatusCode();
                $body = (string)$response->getBody();
                $decoded = $this->decode($body);

                if ($status >= 200 && $status < 300) {
                    return $decoded;
                }

                if (in_array($status, [429, 500, 502, 503, 504]) && $attempt < $this->maxRetries) {
                    $backoff = $this->initialBackoffMs * (2 ** $attempt);
                    usleep($backoff * 1000);
                    $attempt += 1;
                    continue;
                }

                throw new MistApiException(sprintf('Mist API error: HTTP %d: %s', $status, $body), $status);
            } catch (RequestException $e) {
                if ($attempt < $this->maxRetries) {
                    $backoff = $this->initialBackoffMs * (2 ** $attempt);
                    usleep($backoff * 1000);
                    $attempt += 1;
                    continue;
                }
                throw new MistApiException('HTTP request failed: ' . $e->getMessage(), $e->getCode(), $e);
            }
        }

        throw new MistApiException('Exceeded max retries for request');
    }

    private function decode(string $body): array
    {
        if ($body === '') {
            return [];
        }
        $decoded = json_decode($body, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new MistApiException('Invalid JSON response: ' . json_last_error_msg());
        }
        return $decoded;
    }

    public function get(string $path, ?array $query = null, array $headers = []): array
    {
        return $this->request('GET', $path, $query, null, $headers);
    }

    public function post(string $path, ?array $json = null, array $headers = []): array
    {
        return $this->request('POST', $path, null, $json, $headers);
    }

    public function put(string $path, ?array $json = null, array $headers = []): array
    {
        return $this->request('PUT', $path, null, $json, $headers);
    }

    public function patch(string $path, ?array $json = null, array $headers = []): array
    {
        return $this->request('PATCH', $path, null, $json, $headers);
    }

    public function delete(string $path, ?array $json = null, array $headers = []): array
    {
        return $this->request('DELETE', $path, null, $json, $headers);
    }

    public function walkPaginated(string $path, array $query = []): \Generator
    {
        $resp = $this->get($path, $query);
        if (isset($resp['results']) && is_array($resp['results'])) {
            foreach ($resp['results'] as $item) {
                yield $item;
            }
            while (!empty($resp['next'])) {
                $next = $resp['next'];
                if (str_starts_with($next, $this->baseUri)) {
                    $rel = substr($next, strlen($this->baseUri));
                } else {
                    $rel = $next;
                }
                $resp = $this->get($rel);
                foreach ($resp['results'] as $item) {
                    yield $item;
                }
            }
        } else {
            yield $resp;
        }
    }
}
