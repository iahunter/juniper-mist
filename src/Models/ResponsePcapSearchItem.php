<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponsePcapSearchItem
 */
class ResponsePcapSearchItem extends BaseModel
{
    /** @var mixed */
    public $ap_macs;
    /** @var mixed */
    public $aps;
    /** @var number */
    public float $duration;
    /** @var string */
    public string $format;
    /** @var mixed */
    public $id;
    /** @var number */
    public float $max_num_packets;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $pcap_aps;
    /** @var string */
    public string $pcap_url;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $termination_reason;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;
    /** @var string */
    public string $url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}