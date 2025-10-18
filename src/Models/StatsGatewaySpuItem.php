<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsGatewaySpuItem
 */
class StatsGatewaySpuItem extends BaseModel
{
    /** @var integer */
    public int $spu_cpu;
    /** @var integer */
    public int $spu_current_session;
    /** @var integer */
    public int $spu_max_session;
    /** @var integer */
    public int $spu_memory;
    /** @var integer */
    public int $spu_pending_session;
    /** @var integer */
    public int $spu_valid_session;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}