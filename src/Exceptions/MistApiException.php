<?php
declare(strict_types=1);
namespace Iahunter\JuniperMist\Exceptions;
use RuntimeException;
use Psr\Http\Message\ResponseInterface;
class MistApiException extends RuntimeException {
    private ?ResponseInterface $response;
    public function __construct(string $message, int $code=0, ?ResponseInterface $response=null, ?\Throwable $previous=null) {
        parent::__construct($message,$code,$previous); $this->response=$response;
    }
    public function getResponse(): ?ResponseInterface { return $this->response; }
}
