<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApAutoPlacement
 */
class StatsApAutoPlacement extends BaseModel
{
    /** @var mixed */
    public $info;
    /** @var boolean */
    public bool $recommended_anchor;
    /** @var string */
    public string $status;
    /** @var string */
    public string $status_detail;
    /** @var number */
    public float $x;
    /** @var number */
    public float $x_m;
    /** @var number */
    public float $y;
    /** @var number */
    public float $y_m;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}