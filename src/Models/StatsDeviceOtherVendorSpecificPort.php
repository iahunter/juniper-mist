<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsDeviceOtherVendorSpecificPort extends BaseModel
{
    public int $bytes_in;
    public int $bytes_out;
    public string $carrier;
    public string $imei;
    public string $imsi;
    public string $ip;
    public bool $link;
    public string $mode;
    public float $rsrp;
    public float $rsrq;
    public int $rssi;
    public string $service_mode;
    public float $sinr;
    public string $state;
    public string $type;
    public int $uptime;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}