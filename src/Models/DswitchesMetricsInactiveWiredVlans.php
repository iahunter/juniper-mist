<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DswitchesMetricsInactiveWiredVlans
 */
class DswitchesMetricsInactiveWiredVlans extends BaseModel
{
    /** @var object */
    public $details;
    /** @var number */
    public float $score;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}