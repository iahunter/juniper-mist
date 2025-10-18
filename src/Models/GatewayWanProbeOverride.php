<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayWanProbeOverride
 */
class GatewayWanProbeOverride extends BaseModel
{
    /** @var mixed */
    public $ip6s;
    /** @var mixed */
    public $ips;
    /** @var mixed */
    public $probe_profile;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}