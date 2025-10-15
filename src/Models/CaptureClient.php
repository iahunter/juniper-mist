<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class CaptureClient extends BaseModel
{
    public string $ap_mac;
    public string $client_mac;
    public $duration;
    public bool $includes_mcast;
    public $max_pkt_len;
    public $num_packets;
    public string $ssid;
    public $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}