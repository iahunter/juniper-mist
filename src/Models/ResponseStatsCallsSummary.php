<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseStatsCallsSummary extends BaseModel
{
    public float $bad_minutes_client;
    public float $bad_minutes_site_wan;
    public float $bad_minutes_wireless;
    public int $num_aps;
    public int $num_users;
    public float $total_minutes;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}