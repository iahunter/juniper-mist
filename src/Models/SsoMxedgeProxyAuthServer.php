<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SsoMxedgeProxyAuthServer extends BaseModel
{
    public string $host;
    public int $port;
    public bool $require_message_authenticator;
    public int $retry;
    public string $secret;
    public int $timeout;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}