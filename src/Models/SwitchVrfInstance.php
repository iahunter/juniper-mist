<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchVrfInstance extends BaseModel
{
    public $aggregate_routes;
    public $aggregate_routes6;
    public string $evpn_auto_loopback_subnet;
    public string $evpn_auto_loopback_subnet6;
    public $extra_routes;
    public $extra_routes6;
    public $networks;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}