<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SleImpactedUsersUser extends BaseModel
{
    public string $ap_mac;
    public string $ap_name;
    public float $degraded;
    public string $device_os;
    public string $device_type;
    public float $duration;
    public string $mac;
    public string $name;
    public string $ssid;
    public float $total;
    public string $wlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}