<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class GatewayPortConfigIpConfig extends BaseModel
{
    public $dns;
    public $dns_suffix;
    public string $gateway;
    public string $gateway6;
    public string $ip;
    public string $ip6;
    public string $netmask;
    public string $netmask6;
    public string $network;
    public string $poser_password;
    public $pppoe_auth;
    public string $pppoe_username;
    public $type;
    public $type6;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}