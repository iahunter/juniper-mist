<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class CaptureRadiotapwired extends BaseModel
{
    public string $ap_mac;
    public $band;
    public string $client_mac;
    public $duration;
    public $format;
    public $max_pkt_len;
    public $num_packets;
    public string $radiotap_tcpdump_expression;
    public string $ssid;
    public $tcpdump_expression;
    public $type;
    public $wired_tcpdump_expression;
    public string $wireless_tcpdump_expression;
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