<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsDeviceOtherVendorSpecific
 */
class StatsDeviceOtherVendorSpecific extends BaseModel
{
    /** @var object */
    public $ports;
    /** @var string */
    public string $target_version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}