<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SynthetictestDevice extends BaseModel
{
    public string $host;
    public string $hostname;
    public string $ip;
    public string $password;
    public int $ping_count;
    public bool $ping_details;
    public int $ping_size;
    public string $port_id;
    public $protocol;
    public string $tenant;
    public int $timeout;
    public int $traceroute_udp_port;
    public $type;
    public string $url;
    public string $username;
    public $vlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}