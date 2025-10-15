<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class InsightRogueClient extends BaseModel
{
    public string $annotation;
    public string $ap_mac;
    public float $avg_rssi;
    public string $band;
    public string $bssid;
    public string $client_mac;
    public int $num_aps;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}