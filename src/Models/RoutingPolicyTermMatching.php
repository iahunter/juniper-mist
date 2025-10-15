<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RoutingPolicyTermMatching extends BaseModel
{
    public $as_path;
    public $community;
    public $network;
    public $prefix;
    public $protocol;
    public $route_exists;
    public $vpn_neighbor_mac;
    public $vpn_path;
    public $vpn_path_sla;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}