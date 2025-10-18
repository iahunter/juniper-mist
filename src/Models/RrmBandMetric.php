<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RrmBandMetric
 */
class RrmBandMetric extends BaseModel
{
    /** @var number */
    public float $cochannel_neighbors;
    /** @var number */
    public float $density;
    /** @var object */
    public $interferences;
    /** @var number */
    public float $neighbors;
    /** @var number */
    public float $noise;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}