<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayPortVpnPath
 */
class GatewayPortVpnPath extends BaseModel
{
    /** @var mixed */
    public $bfd_profile;
    /** @var boolean */
    public bool $bfd_use_tunnel_mode;
    /** @var integer */
    public int $preference;
    /** @var mixed */
    public $role;
    /** @var mixed */
    public $traffic_shaping;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}