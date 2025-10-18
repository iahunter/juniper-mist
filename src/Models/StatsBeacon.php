<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsBeacon
 */
class StatsBeacon extends BaseModel
{
    /** @var number */
    public float $battery_voltage;
    /** @var string */
    public string $eddystone_instance;
    /** @var string */
    public string $eddystone_namespace;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $power;
    /** @var string */
    public string $type;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}