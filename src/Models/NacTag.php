<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class NacTag extends BaseModel
{
    public bool $allow_usermac_override;
    public $created_time;
    public $egress_vlan_names;
    public $gbp_tag;
    public $id;
    public $match;
    public bool $match_all;
    public $modified_time;
    public $nacportal_id;
    public string $name;
    public $org_id;
    public $radius_attrs;
    public string $radius_group;
    public $radius_vendor_attrs;
    public int $session_timeout;
    public $type;
    public $username_attr;
    public $values;
    public string $vlan;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}