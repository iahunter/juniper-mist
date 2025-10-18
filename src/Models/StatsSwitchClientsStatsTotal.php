<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsSwitchClientsStatsTotal
 */
class StatsSwitchClientsStatsTotal extends BaseModel
{
    /** @var mixed */
    public $num_aps;
    /** @var integer */
    public int $num_wired_clients;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}