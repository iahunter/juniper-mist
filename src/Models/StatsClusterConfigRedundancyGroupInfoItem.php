<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsClusterConfigRedundancyGroupInfoItem
 */
class StatsClusterConfigRedundancyGroupInfoItem extends BaseModel
{
    /** @var integer */
    public int $Id;
    /** @var string */
    public string $MonitoringFailure;
    /** @var integer */
    public int $Threshold;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}