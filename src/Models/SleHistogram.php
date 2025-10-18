<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleHistogram
 */
class SleHistogram extends BaseModel
{
    /** @var mixed */
    public $data;
    /** @var number */
    public float $end;
    /** @var string */
    public string $metric;
    /** @var number */
    public float $start;
    /** @var string */
    public string $x_label;
    /** @var string */
    public string $y_label;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}