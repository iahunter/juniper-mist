<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model IfStatProperty
 */
class IfStatProperty extends BaseModel
{
    /** @var string */
    public string $address_mode;
    /** @var mixed */
    public $ips;
    /** @var mixed */
    public $nat_addresses;
    /** @var string */
    public string $network_name;
    /** @var string */
    public string $port_id;
    /** @var string */
    public string $port_usage;
    /** @var string */
    public string $redundancy_state;
    /** @var mixed */
    public $rx_bytes;
    /** @var mixed */
    public $rx_pkts;
    /** @var mixed */
    public $servp_info;
    /** @var mixed */
    public $tx_bytes;
    /** @var mixed */
    public $tx_pkts;
    /** @var boolean */
    public bool $up;
    /** @var integer */
    public int $vlan;
    /** @var string */
    public string $wan_name;
    /** @var string */
    public string $wan_type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}