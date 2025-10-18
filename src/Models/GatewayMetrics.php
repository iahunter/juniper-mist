<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayMetrics
 */
class GatewayMetrics extends BaseModel
{
    /** @var number */
    public float $config_success;
    /** @var mixed */
    public $version_compliance;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}