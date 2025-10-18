<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RoutingPolicyTermMatchingVpnPathSla
 */
class RoutingPolicyTermMatchingVpnPathSla extends BaseModel
{
    /** @var integer */
    public int $max_jitter;
    /** @var integer */
    public int $max_latency;
    /** @var integer */
    public int $max_loss;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}