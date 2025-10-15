<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class NetworkVpnAccessConfig extends BaseModel
{
    public string $advertised_subnet;
    public bool $allow_ping;
    public $destination_nat;
    public string $nat_pool;
    public bool $no_readvertise_to_lan_bgp;
    public bool $no_readvertise_to_lan_ospf;
    public bool $no_readvertise_to_overlay;
    public $other_vrfs;
    public bool $routed;
    public $source_nat;
    public $static_nat;
    public string $summarized_subnet;
    public string $summarized_subnet_to_lan_bgp;
    public string $summarized_subnet_to_lan_ospf;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}