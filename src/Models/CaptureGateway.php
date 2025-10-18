<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CaptureGateway
 */
class CaptureGateway extends BaseModel
{
    /** @var mixed */
    public $duration;
    /** @var mixed */
    public $format;
    /** @var object */
    public $gateways;
    /** @var integer */
    public int $max_pkt_len;
    /** @var mixed */
    public $num_packets;
    /** @var mixed */
    public $ports;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}