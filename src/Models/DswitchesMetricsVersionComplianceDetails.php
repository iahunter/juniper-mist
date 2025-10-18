<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DswitchesMetricsVersionComplianceDetails
 */
class DswitchesMetricsVersionComplianceDetails extends BaseModel
{
    /** @var mixed */
    public $major_versions;
    /** @var integer */
    public int $total_switch_count;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}