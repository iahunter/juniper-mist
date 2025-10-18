<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Anomaly
 */
class Anomaly extends BaseModel
{
    /** @var mixed */
    public $events;
    /** @var number */
    public float $since;
    /** @var number */
    public float $sle_baseline;
    /** @var number */
    public float $sle_deviation;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}