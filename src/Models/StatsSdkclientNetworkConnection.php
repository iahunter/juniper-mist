<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsSdkclientNetworkConnection
 */
class StatsSdkclientNetworkConnection extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var number */
    public float $rssi;
    /** @var number */
    public float $signal_level;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}