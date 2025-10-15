<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsDeviceOther extends BaseModel
{
    public bool $cached_stats;
    public string $config_status;
    public $connected_devices;
    public $interfaces;
    public int $last_config;
    public $last_seen;
    public bool $lldp_enabled;
    public string $mac;
    public string $status;
    public int $uptime;
    public string $vendor;
    public $vendor_specific;
    public string $version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}