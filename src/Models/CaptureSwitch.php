<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CaptureSwitch
 */
class CaptureSwitch extends BaseModel
{
    /** @var mixed */
    public $duration;
    /** @var mixed */
    public $format;
    /** @var mixed */
    public $max_pkt_len;
    /** @var mixed */
    public $num_packets;
    /** @var mixed */
    public $ports;
    /** @var object */
    public $switches;
    /** @var string */
    public string $tcpdump_expression;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}