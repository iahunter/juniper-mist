<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApGpsStat
 */
class StatsApGpsStat extends BaseModel
{
    /** @var number */
    public float $accuracy;
    /** @var number */
    public float $altitude;
    /** @var number */
    public float $latitude;
    /** @var number */
    public float $longitude;
    /** @var mixed */
    public $src;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}