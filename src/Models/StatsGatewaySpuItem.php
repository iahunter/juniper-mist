<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsGatewaySpuItem extends BaseModel
{
    public int $spu_cpu;
    public int $spu_current_session;
    public int $spu_max_session;
    public int $spu_memory;
    public int $spu_pending_session;
    public int $spu_valid_session;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}