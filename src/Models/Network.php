<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Network
 */
class Network extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $disallow_mist_services;
    /** @var string */
    public string $gateway;
    /** @var string */
    public string $gateway6;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $internal_access;
    /** @var mixed */
    public $internet_access;
    /** @var boolean */
    public bool $isolation;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $multicast;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $routed_for_networks;
    /** @var string */
    public string $subnet;
    /** @var string */
    public string $subnet6;
    /** @var mixed */
    public $tenants;
    /** @var mixed */
    public $vlan_id;
    /** @var mixed */
    public $vpn_access;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}