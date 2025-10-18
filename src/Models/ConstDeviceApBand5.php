<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstDeviceApBand5
 */
class ConstDeviceApBand5 extends BaseModel
{
    /** @var integer */
    public int $max_clients;
    /** @var integer */
    public int $max_power;
    /** @var integer */
    public int $min_power;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}