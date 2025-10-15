<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AclTag extends BaseModel
{
    public $ether_types;
    public int $gbp_tag;
    public $macs;
    public string $network;
    public string $port_usage;
    public string $radius_group;
    public $specs;
    public $subnets;
    public $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}