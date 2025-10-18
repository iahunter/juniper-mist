<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model BgpConfig
 */
class BgpConfig extends BaseModel
{
    /** @var string */
    public string $auth_key;
    /** @var integer */
    public int $bfd_minimum_interval;
    /** @var integer */
    public int $bfd_multiplier;
    /** @var boolean */
    public bool $disable_bfd;
    /** @var string */
    public string $export;
    /** @var string */
    public string $export_policy;
    /** @var boolean */
    public bool $extended_v4_nexthop;
    /** @var integer */
    public int $graceful_restart_time;
    /** @var integer */
    public int $hold_time;
    /** @var string */
    public string $import;
    /** @var string */
    public string $import_policy;
    /** @var mixed */
    public $local_as;
    /** @var mixed */
    public $neighbor_as;
    /** @var object */
    public $neighbors;
    /** @var mixed */
    public $networks;
    /** @var boolean */
    public bool $no_private_as;
    /** @var boolean */
    public bool $no_readvertise_to_overlay;
    /** @var string */
    public string $tunnel_name;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $via;
    /** @var string */
    public string $vpn_name;
    /** @var string */
    public string $wan_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}