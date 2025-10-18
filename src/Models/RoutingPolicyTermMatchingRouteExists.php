<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RoutingPolicyTermMatchingRouteExists
 */
class RoutingPolicyTermMatchingRouteExists extends BaseModel
{
    /** @var string */
    public string $route;
    /** @var string */
    public string $vrf_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}