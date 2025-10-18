<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleThreshold
 */
class SleThreshold extends BaseModel
{
    /** @var number */
    public float $default;
    /** @var string */
    public string $direction;
    /** @var number */
    public float $maximum;
    /** @var string */
    public string $metric;
    /** @var number */
    public float $minimum;
    /** @var string */
    public string $threshold;
    /** @var string */
    public string $units;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}