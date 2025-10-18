<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NetworkVpnAccessConfig
 */
class NetworkVpnAccessConfig extends BaseModel
{
    /** @var string */
    public string $advertised_subnet;
    /** @var boolean */
    public bool $allow_ping;
    /** @var mixed */
    public $destination_nat;
    /** @var string */
    public string $nat_pool;
    /** @var boolean */
    public bool $no_readvertise_to_lan_bgp;
    /** @var boolean */
    public bool $no_readvertise_to_lan_ospf;
    /** @var boolean */
    public bool $no_readvertise_to_overlay;
    /** @var mixed */
    public $other_vrfs;
    /** @var boolean */
    public bool $routed;
    /** @var mixed */
    public $source_nat;
    /** @var mixed */
    public $static_nat;
    /** @var string */
    public string $summarized_subnet;
    /** @var string */
    public string $summarized_subnet_to_lan_bgp;
    /** @var string */
    public string $summarized_subnet_to_lan_ospf;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}