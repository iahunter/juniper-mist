<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsMxedgeMemoryStat
 */
class StatsMxedgeMemoryStat extends BaseModel
{
    /** @var integer */
    public int $active;
    /** @var integer */
    public int $available;
    /** @var integer */
    public int $buffers;
    /** @var integer */
    public int $cached;
    /** @var integer */
    public int $free;
    /** @var integer */
    public int $inactive;
    /** @var integer */
    public int $swap_cached;
    /** @var integer */
    public int $swap_free;
    /** @var integer */
    public int $swap_total;
    /** @var integer */
    public int $total;
    /** @var integer */
    public int $usage;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}