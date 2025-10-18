<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CaptureScan
 */
class CaptureScan extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var object */
    public $aps;
    /** @var mixed */
    public $band;
    /** @var mixed */
    public $bandwidth;
    /** @var integer */
    public int $channel;
    /** @var string */
    public string $client_mac;
    /** @var mixed */
    public $duration;
    /** @var mixed */
    public $format;
    /** @var mixed */
    public $max_pkt_len;
    /** @var mixed */
    public $num_packets;
    /** @var string */
    public string $tcpdump_expression;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $width;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}