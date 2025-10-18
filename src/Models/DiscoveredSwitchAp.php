<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DiscoveredSwitchAp
 */
class DiscoveredSwitchAp extends BaseModel
{
    /** @var string */
    public string $hostname;
    /** @var string */
    public string $mac;
    /** @var boolean */
    public bool $poe_status;
    /** @var string */
    public string $port;
    /** @var string */
    public string $port_id;
    /** @var number */
    public float $power_draw;
    /** @var string */
    public string $when;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}