<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApL2tpStat
 */
class StatsApL2tpStat extends BaseModel
{
    /** @var mixed */
    public $sessions;
    /** @var mixed */
    public $state;
    /** @var integer */
    public int $uptime;
    /** @var string */
    public string $wxtunnel_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}