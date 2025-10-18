<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TunnelConfigAutoProvisionNode
 */
class TunnelConfigAutoProvisionNode extends BaseModel
{
    /** @var mixed */
    public $probe_ips;
    /** @var mixed */
    public $wan_names;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}