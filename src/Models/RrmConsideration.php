<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RrmConsideration extends BaseModel
{
    public int $channel;
    public float $noise;
    public float $other_rssi;
    public string $other_ssid;
    public float $util_score;
    public float $util_score_non_wifi;
    public float $util_score_other;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}