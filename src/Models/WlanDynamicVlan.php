<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WlanDynamicVlan extends BaseModel
{
    public $default_vlan_id;
    public $default_vlan_ids;
    public bool $enabled;
    public $local_vlan_ids;
    public $type;
    public array $vlans;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}