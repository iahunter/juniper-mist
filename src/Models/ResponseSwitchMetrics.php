<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseSwitchMetrics
 */
class ResponseSwitchMetrics extends BaseModel
{
    /** @var mixed */
    public $active_ports_summary;
    /** @var mixed */
    public $config_success;
    /** @var mixed */
    public $version_compliance;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}