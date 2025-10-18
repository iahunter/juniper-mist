<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RoutingPolicyTermMatching
 */
class RoutingPolicyTermMatching extends BaseModel
{
    /** @var mixed */
    public $as_path;
    /** @var mixed */
    public $community;
    /** @var mixed */
    public $network;
    /** @var mixed */
    public $prefix;
    /** @var mixed */
    public $protocol;
    /** @var mixed */
    public $route_exists;
    /** @var mixed */
    public $vpn_neighbor_mac;
    /** @var mixed */
    public $vpn_path;
    /** @var mixed */
    public $vpn_path_sla;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}