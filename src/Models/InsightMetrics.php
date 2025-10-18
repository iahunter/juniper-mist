<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model InsightMetrics
 */
class InsightMetrics extends BaseModel
{
    /** @var integer */
    public int $end;
    /** @var integer */
    public int $interval;
    /** @var mixed */
    public $results;
    /** @var integer */
    public int $start;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}