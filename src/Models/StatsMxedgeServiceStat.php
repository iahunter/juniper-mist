<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsMxedgeServiceStat extends BaseModel
{
    public string $ext_ip;
    public float $last_seen;
    public string $package_state;
    public string $package_version;
    public string $running_state;
    public int $uptime;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}