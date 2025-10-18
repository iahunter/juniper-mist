<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseOrgDevicesSummary
 */
class ResponseOrgDevicesSummary extends BaseModel
{
    /** @var integer */
    public int $num_aps;
    /** @var integer */
    public int $num_gateways;
    /** @var integer */
    public int $num_mxedges;
    /** @var integer */
    public int $num_switches;
    /** @var integer */
    public int $num_unassigned_aps;
    /** @var integer */
    public int $num_unassigned_gateways;
    /** @var integer */
    public int $num_unassigned_switches;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}