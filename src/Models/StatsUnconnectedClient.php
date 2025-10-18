<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsUnconnectedClient
 */
class StatsUnconnectedClient extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $manufacture;
    /** @var string */
    public string $map_id;
    /** @var integer */
    public int $rssi;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}