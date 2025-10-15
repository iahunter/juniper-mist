<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WanUsages extends BaseModel
{
    public string $mac;
    public string $path_type;
    public int $path_weight;
    public string $peer_mac;
    public string $peer_port_id;
    public string $policy;
    public string $port_id;
    public string $tenant;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}