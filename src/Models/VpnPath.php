<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class VpnPath extends BaseModel
{
    public $bfd_profile;
    public bool $bfd_use_tunnel_mode;
    public string $ip;
    public $peer_paths;
    public int $pod;
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