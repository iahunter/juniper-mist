<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NacTag
 */
class NacTag extends BaseModel
{
    /** @var boolean */
    public bool $allow_usermac_override;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $egress_vlan_names;
    /** @var mixed */
    public $gbp_tag;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $match;
    /** @var boolean */
    public bool $match_all;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $nacportal_id;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $radius_attrs;
    /** @var string */
    public string $radius_group;
    /** @var mixed */
    public $radius_vendor_attrs;
    /** @var integer */
    public int $session_timeout;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $username_attr;
    /** @var mixed */
    public $values;
    /** @var string */
    public string $vlan;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}