<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApStatMeshDownlink extends BaseModel
{
    public string $band;
    public int $channel;
    public int $idle_time;
    public $last_seen;
    public string $proto;
    public int $rssi;
    public $rx_bps;
    public $rx_bytes;
    public $rx_packets;
    public $rx_rate;
    public $rx_retries;
    public $site_id;
    public int $snr;
    public $tx_bps;
    public $tx_bytes;
    public $tx_packets;
    public $tx_rate;
    public $tx_retries;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}