<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsClusterConfigFabricLinkInfo
 */
class StatsClusterConfigFabricLinkInfo extends BaseModel
{
    /** @var string */
    public string $DataPlaneNotifiedStatus;
    /** @var mixed */
    public $Interface;
    /** @var string */
    public string $InternalStatus;
    /** @var string */
    public string $State;
    /** @var string */
    public string $Status;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}