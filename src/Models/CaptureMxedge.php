<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class CaptureMxedge extends BaseModel
{
    public int $duration;
    public $format;
    public int $max_pkt_len;
    public array $mxedges;
    public int $num_packets;
    public $type;
    public string $tzsp_host;
    public int $tzsp_port;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}