<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UserMac extends BaseModel
{
    public $id;
    public $labels;
    public string $mac;
    public string $name;
    public string $notes;
    public string $radius_group;
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