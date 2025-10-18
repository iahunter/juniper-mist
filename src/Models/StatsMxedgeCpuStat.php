<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsMxedgeCpuStat
 */
class StatsMxedgeCpuStat extends BaseModel
{
    /** @var mixed */
    public $cpus;
    /** @var integer */
    public int $idle;
    /** @var integer */
    public int $interrupt;
    /** @var integer */
    public int $system;
    /** @var integer */
    public int $usage;
    /** @var integer */
    public int $user;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}