<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class CaptureGateway extends BaseModel
{
    public $duration;
    public $format;
    public array $gateways;
    public int $max_pkt_len;
    public $num_packets;
    public $ports;
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