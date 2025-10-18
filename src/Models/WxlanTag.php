<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WxlanTag
 */
class WxlanTag extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $last_ips;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $match;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $op;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $resource_mac;
    /** @var mixed */
    public $services;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $specs;
    /** @var string */
    public string $subnet;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $values;
    /** @var mixed */
    public $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}