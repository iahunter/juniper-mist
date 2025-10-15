<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class InsightRogueAp extends BaseModel
{
    public string $ap_mac;
    public float $avg_rssi;
    public string $bssid;
    public string $channel;
    public float $delta_x;
    public float $delta_y;
    public int $num_aps;
    public bool $seen_on_lan;
    public string $ssid;
    public int $times_heard;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}