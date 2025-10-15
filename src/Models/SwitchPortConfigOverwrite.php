<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchPortConfigOverwrite extends BaseModel
{
    public string $description;
    public bool $disabled;
    public $duplex;
    public $mac_limit;
    public bool $poe_disabled;
    public string $port_network;
    public $speed;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}