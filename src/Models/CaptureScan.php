<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class CaptureScan extends BaseModel
{
    public string $ap_mac;
    public array $aps;
    public $band;
    public $bandwidth;
    public int $channel;
    public string $client_mac;
    public $duration;
    public $format;
    public $max_pkt_len;
    public $num_packets;
    public string $tcpdump_expression;
    public $type;
    public string $width;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}