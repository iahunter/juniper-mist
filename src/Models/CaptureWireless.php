<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CaptureWireless
 */
class CaptureWireless extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var mixed */
    public $band;
    /** @var mixed */
    public $duration;
    /** @var mixed */
    public $format;
    /** @var mixed */
    public $max_pkt_len;
    /** @var mixed */
    public $num_packets;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}