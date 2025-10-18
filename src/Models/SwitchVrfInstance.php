<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchVrfInstance
 */
class SwitchVrfInstance extends BaseModel
{
    /** @var mixed */
    public $aggregate_routes;
    /** @var mixed */
    public $aggregate_routes6;
    /** @var string */
    public string $evpn_auto_loopback_subnet;
    /** @var string */
    public string $evpn_auto_loopback_subnet6;
    /** @var mixed */
    public $extra_routes;
    /** @var mixed */
    public $extra_routes6;
    /** @var mixed */
    public $networks;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}