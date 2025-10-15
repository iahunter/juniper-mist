<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class CaptureWired extends BaseModel
{
    public string $ap_mac;
    public $duration;
    public $format;
    public $max_pkt_len;
    public $num_packets;
    public $tcpdump_expression;
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