<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponsePcapStatus
 */
class ResponsePcapStatus extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var mixed */
    public $aps;
    /** @var string */
    public string $client_mac;
    /** @var integer */
    public int $duration;
    /** @var mixed */
    public $failed;
    /** @var mixed */
    public $format;
    /** @var mixed */
    public $gateways;
    /** @var mixed */
    public $id;
    /** @var boolean */
    public bool $includes_mcast;
    /** @var integer */
    public int $max_num_packets;
    /** @var integer */
    public int $max_pkt_len;
    /** @var mixed */
    public $mxedges;
    /** @var integer */
    public int $num_packets;
    /** @var mixed */
    public $ok;
    /** @var mixed */
    public $pcap_aps;
    /** @var string */
    public string $radiotap_tcpdump_expression;
    /** @var string */
    public string $scan_tcpdump_expression;
    /** @var string */
    public string $ssid;
    /** @var integer */
    public int $started_time;
    /** @var mixed */
    public $switches;
    /** @var string */
    public string $tcpdump_expression;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $tzsp_host;
    /** @var integer */
    public int $tzsp_port;
    /** @var string */
    public string $wired_tcpdump_expression;
    /** @var string */
    public string $wireless_tcpdump_expression;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}