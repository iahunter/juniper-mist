<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponsePcapStatus extends BaseModel
{
    public string $ap_mac;
    public $aps;
    public string $client_mac;
    public int $duration;
    public $failed;
    public $format;
    public $gateways;
    public $id;
    public bool $includes_mcast;
    public int $max_num_packets;
    public int $max_pkt_len;
    public $mxedges;
    public int $num_packets;
    public $ok;
    public $pcap_aps;
    public string $radiotap_tcpdump_expression;
    public string $scan_tcpdump_expression;
    public string $ssid;
    public int $started_time;
    public $switches;
    public string $tcpdump_expression;
    public $type;
    public string $tzsp_host;
    public int $tzsp_port;
    public string $wired_tcpdump_expression;
    public string $wireless_tcpdump_expression;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}