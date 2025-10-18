<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayMatchingRule
 */
class GatewayMatchingRule extends BaseModel
{
    /** @var mixed */
    public $additional_config_cmds;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $port_config;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}