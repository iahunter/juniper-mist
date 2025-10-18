<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CaptureMxedge
 */
class CaptureMxedge extends BaseModel
{
    /** @var integer */
    public int $duration;
    /** @var mixed */
    public $format;
    /** @var integer */
    public int $max_pkt_len;
    /** @var object */
    public $mxedges;
    /** @var integer */
    public int $num_packets;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $tzsp_host;
    /** @var integer */
    public int $tzsp_port;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}