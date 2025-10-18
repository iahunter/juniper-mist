<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WxlanTunnelDmvpn
 */
class WxlanTunnelDmvpn extends BaseModel
{
    /** @var boolean */
    public bool $enabled;
    /** @var integer */
    public int $holding_time;
    /** @var mixed */
    public $host_routes;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}