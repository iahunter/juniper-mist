<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ModuleStatItemPoe
 */
class ModuleStatItemPoe extends BaseModel
{
    /** @var number */
    public float $max_power;
    /** @var number */
    public float $power_draw;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}