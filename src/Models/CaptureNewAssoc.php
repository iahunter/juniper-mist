<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CaptureNewAssoc
 */
class CaptureNewAssoc extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var string */
    public string $client_mac;
    /** @var mixed */
    public $duration;
    /** @var boolean */
    public bool $includes_mcast;
    /** @var mixed */
    public $max_pkt_len;
    /** @var mixed */
    public $num_packets;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}