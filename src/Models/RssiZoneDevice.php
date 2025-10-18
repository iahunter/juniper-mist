<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RssiZoneDevice
 */
class RssiZoneDevice extends BaseModel
{
    /** @var mixed */
    public $device_id;
    /** @var integer */
    public int $rssi;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}