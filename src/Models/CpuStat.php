<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CpuStat
 */
class CpuStat extends BaseModel
{
    /** @var number */
    public float $idle;
    /** @var number */
    public float $interrupt;
    /** @var mixed */
    public $load_avg;
    /** @var number */
    public float $system;
    /** @var number */
    public float $user;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}