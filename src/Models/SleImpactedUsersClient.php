<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SleImpactedUsersClient extends BaseModel
{
    public float $degraded;
    public float $duration;
    public $gateways;
    public string $mac;
    public string $name;
    public string $src_ip;
    public float $total;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}