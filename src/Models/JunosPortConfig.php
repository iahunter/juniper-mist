<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class JunosPortConfig extends BaseModel
{
    public bool $ae_disable_lacp;
    public int $ae_idx;
    public bool $ae_lacp_slow;
    public bool $aggregated;
    public bool $critical;
    public string $description;
    public bool $disable_autoneg;
    public $duplex;
    public string $dynamic_usage;
    public bool $esilag;
    public int $mtu;
    public bool $no_local_overwrite;
    public bool $poe_disabled;
    public string $port_network;
    public $speed;
    public string $usage;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}