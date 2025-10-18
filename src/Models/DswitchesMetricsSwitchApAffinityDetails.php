<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DswitchesMetricsSwitchApAffinityDetails
 */
class DswitchesMetricsSwitchApAffinityDetails extends BaseModel
{
    /** @var mixed */
    public $system_name;
    /** @var number */
    public float $threshold;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}