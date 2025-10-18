<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchMatchingRule
 */
class SwitchMatchingRule extends BaseModel
{
    /** @var mixed */
    public $additional_config_cmds;
    /** @var mixed */
    public $ip_config;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $oob_ip_config;
    /** @var mixed */
    public $port_config;
    /** @var mixed */
    public $port_mirroring;
    /** @var mixed */
    public $stp_config;
    /** @var mixed */
    public $switch_mgmt;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}