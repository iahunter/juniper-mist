<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RadiusAuthServer extends BaseModel
{
    public string $host;
    public bool $keywrap_enabled;
    public $keywrap_format;
    public string $keywrap_kek;
    public string $keywrap_mack;
    public $port;
    public bool $require_message_authenticator;
    public string $secret;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}