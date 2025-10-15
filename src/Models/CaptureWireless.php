<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class CaptureWireless extends BaseModel
{
    public string $ap_mac;
    public $band;
    public $duration;
    public $format;
    public $max_pkt_len;
    public $num_packets;
    public string $ssid;
    public $type;
    public string $wlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}