<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleSummary
 */
class SleSummary extends BaseModel
{
    /** @var mixed */
    public $classifiers;
    /** @var number */
    public float $end;
    /** @var mixed */
    public $events;
    /** @var mixed */
    public $impact;
    /** @var mixed */
    public $sle;
    /** @var number */
    public float $start;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}