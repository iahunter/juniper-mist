<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class GatewayPortVpnPath extends BaseModel
{
    public $bfd_profile;
    public bool $bfd_use_tunnel_mode;
    public int $preference;
    public $role;
    public $traffic_shaping;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}