<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseDswitchesMetrics
 */
class ResponseDswitchesMetrics extends BaseModel
{
    /** @var mixed */
    public $inactive_wired_vlans;
    /** @var mixed */
    public $poe_compliance;
    /** @var mixed */
    public $switch_ap_affinity;
    /** @var mixed */
    public $version_compliance;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}