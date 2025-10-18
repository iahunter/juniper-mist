<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponsePcapStart
 */
class ResponsePcapStart extends BaseModel
{
    /** @var integer */
    public int $ap_count;
    /** @var mixed */
    public $aps;
    /** @var string */
    public string $client_mac;
    /** @var number */
    public float $duration;
    /** @var boolean */
    public bool $enabled;
    /** @var number */
    public float $expiry;
    /** @var string */
    public string $format;
    /** @var mixed */
    public $id;
    /** @var boolean */
    public bool $include_mcast;
    /** @var integer */
    public int $max_pkt_len;
    /** @var integer */
    public int $num_packets;
    /** @var mixed */
    public $org_id;
    /** @var boolean */
    public bool $raw;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $ssid;
    /** @var string */
    public string $tcpdump_parser_expression;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}