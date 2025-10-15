<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class GatewayPathPreferencesPath extends BaseModel
{
    public int $cost;
    public bool $disabled;
    public string $gateway_ip;
    public bool $internet_access;
    public string $name;
    public $networks;
    public $target_ips;
    public $type;
    public string $wan_name;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}