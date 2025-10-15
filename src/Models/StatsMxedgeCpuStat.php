<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsMxedgeCpuStat extends BaseModel
{
    public $cpus;
    public int $idle;
    public int $interrupt;
    public int $system;
    public int $usage;
    public int $user;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}