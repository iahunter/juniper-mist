<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedUsersUser
 */
class SleImpactedUsersUser extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var string */
    public string $ap_name;
    /** @var number */
    public float $degraded;
    /** @var string */
    public string $device_os;
    /** @var string */
    public string $device_type;
    /** @var number */
    public float $duration;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $name;
    /** @var string */
    public string $ssid;
    /** @var number */
    public float $total;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}