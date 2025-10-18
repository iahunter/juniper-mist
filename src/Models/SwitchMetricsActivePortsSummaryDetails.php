<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchMetricsActivePortsSummaryDetails
 */
class SwitchMetricsActivePortsSummaryDetails extends BaseModel
{
    /** @var integer */
    public int $active_port_count;
    /** @var integer */
    public int $total_port_count;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}