<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleClassifierSummary
 */
class SleClassifierSummary extends BaseModel
{
    /** @var mixed */
    public $classifier;
    /** @var number */
    public float $end;
    /** @var mixed */
    public $failures;
    /** @var mixed */
    public $impact;
    /** @var string */
    public string $metric;
    /** @var number */
    public float $start;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}