<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchPortConfigOverwrite
 */
class SwitchPortConfigOverwrite extends BaseModel
{
    /** @var string */
    public string $description;
    /** @var boolean */
    public bool $disabled;
    /** @var mixed */
    public $duplex;
    /** @var mixed */
    public $mac_limit;
    /** @var boolean */
    public bool $poe_disabled;
    /** @var string */
    public string $port_network;
    /** @var mixed */
    public $speed;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}