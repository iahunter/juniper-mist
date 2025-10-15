<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponsePcapSearchItem extends BaseModel
{
    public $ap_macs;
    public $aps;
    public float $duration;
    public string $format;
    public $id;
    public float $max_num_packets;
    public $org_id;
    public $pcap_aps;
    public string $pcap_url;
    public $site_id;
    public string $termination_reason;
    public $timestamp;
    public string $type;
    public string $url;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}