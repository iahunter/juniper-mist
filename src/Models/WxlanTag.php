<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WxlanTag extends BaseModel
{
    public $created_time;
    public bool $for_site;
    public $id;
    public $last_ips;
    public string $mac;
    public $match;
    public $modified_time;
    public string $name;
    public $op;
    public $org_id;
    public string $resource_mac;
    public $services;
    public $site_id;
    public $specs;
    public string $subnet;
    public $type;
    public $values;
    public $vlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}