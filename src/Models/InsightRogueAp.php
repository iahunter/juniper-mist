<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model InsightRogueAp
 */
class InsightRogueAp extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var number */
    public float $avg_rssi;
    /** @var string */
    public string $bssid;
    /** @var string */
    public string $channel;
    /** @var number */
    public float $delta_x;
    /** @var number */
    public float $delta_y;
    /** @var integer */
    public int $num_aps;
    /** @var boolean */
    public bool $seen_on_lan;
    /** @var string */
    public string $ssid;
    /** @var integer */
    public int $times_heard;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}