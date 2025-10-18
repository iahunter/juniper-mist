<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingSwitchMgmt
 */
class OrgSettingSwitchMgmt extends BaseModel
{
    /** @var integer */
    public int $ap_affinity_threshold;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}