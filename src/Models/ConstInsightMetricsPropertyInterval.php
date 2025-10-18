<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstInsightMetricsPropertyInterval
 */
class ConstInsightMetricsPropertyInterval extends BaseModel
{
    /** @var integer */
    public int $interval;
    /** @var integer */
    public int $max_age;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}