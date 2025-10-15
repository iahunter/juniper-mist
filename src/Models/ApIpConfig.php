<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApIpConfig extends BaseModel
{
    public $dns;
    public $dns_suffix;
    public string $gateway;
    public string $gateway6;
    public string $ip;
    public string $ip6;
    public int $mtu;
    public string $netmask;
    public string $netmask6;
    public $type;
    public $type6;
    public int $vlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}