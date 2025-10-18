<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleThresholds
 */
class SleThresholds extends BaseModel
{
    /** @var integer */
    public int $capacity;
    /** @var integer */
    public int $coverage;
    /** @var integer */
    public int $throughput;
    /** @var integer */
    public int $time-to-connect;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}