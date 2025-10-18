<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EvpnTopologySwitch
 */
class EvpnTopologySwitch extends BaseModel
{
    /** @var mixed */
    public $config;
    /** @var string */
    public string $deviceprofile_id;
    /** @var mixed */
    public $downlink_ips;
    /** @var mixed */
    public $downlinks;
    /** @var mixed */
    public $esilaglinks;
    /** @var integer */
    public int $evpn_id;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $model;
    /** @var integer */
    public int $pod;
    /** @var mixed */
    public $pods;
    /** @var mixed */
    public $role;
    /** @var string */
    public string $router_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $suggested_downlinks;
    /** @var mixed */
    public $suggested_esilaglinks;
    /** @var mixed */
    public $suggested_uplinks;
    /** @var mixed */
    public $uplinks;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}