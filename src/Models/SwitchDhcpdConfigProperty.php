<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchDhcpdConfigProperty extends BaseModel
{
    public $dns_servers;
    public $dns_suffix;
    public $fixed_bindings;
    public string $gateway;
    public string $ip_end;
    public string $ip_end6;
    public string $ip_start;
    public string $ip_start6;
    public int $lease_time;
    public $options;
    public bool $server_id_override;
    public $servers;
    public $servers6;
    public $type;
    public $type6;
    public $vendor_encapsulated;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}