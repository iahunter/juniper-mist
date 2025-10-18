<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstDeviceApVble
 */
class ConstDeviceApVble extends BaseModel
{
    /** @var integer */
    public int $beacon_rate;
    /** @var integer */
    public int $beams;
    /** @var integer */
    public int $power;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}