<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsMxedgeMemoryStat extends BaseModel
{
    public int $active;
    public int $available;
    public int $buffers;
    public int $cached;
    public int $free;
    public int $inactive;
    public int $swap_cached;
    public int $swap_free;
    public int $swap_total;
    public int $total;
    public int $usage;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}