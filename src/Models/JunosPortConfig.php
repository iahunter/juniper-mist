<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model JunosPortConfig
 */
class JunosPortConfig extends BaseModel
{
    /** @var boolean */
    public bool $ae_disable_lacp;
    /** @var integer */
    public int $ae_idx;
    /** @var boolean */
    public bool $ae_lacp_slow;
    /** @var boolean */
    public bool $aggregated;
    /** @var boolean */
    public bool $critical;
    /** @var string */
    public string $description;
    /** @var boolean */
    public bool $disable_autoneg;
    /** @var mixed */
    public $duplex;
    /** @var string */
    public string $dynamic_usage;
    /** @var boolean */
    public bool $esilag;
    /** @var integer */
    public int $mtu;
    /** @var boolean */
    public bool $no_local_overwrite;
    /** @var boolean */
    public bool $poe_disabled;
    /** @var string */
    public string $port_network;
    /** @var mixed */
    public $speed;
    /** @var string */
    public string $usage;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}