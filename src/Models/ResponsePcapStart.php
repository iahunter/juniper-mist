<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponsePcapStart extends BaseModel
{
    public int $ap_count;
    public $aps;
    public string $client_mac;
    public float $duration;
    public bool $enabled;
    public float $expiry;
    public string $format;
    public $id;
    public bool $include_mcast;
    public int $max_pkt_len;
    public int $num_packets;
    public $org_id;
    public bool $raw;
    public $site_id;
    public string $ssid;
    public string $tcpdump_parser_expression;
    public $timestamp;
    public string $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}