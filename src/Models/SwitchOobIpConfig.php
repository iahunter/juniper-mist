<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchOobIpConfig
 */
class SwitchOobIpConfig extends BaseModel
{
    /** @var string */
    public string $gateway;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $netmask;
    /** @var string */
    public string $network;
    /** @var mixed */
    public $type;
    /** @var boolean */
    public bool $use_mgmt_vrf;
    /** @var boolean */
    public bool $use_mgmt_vrf_for_host_out;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}