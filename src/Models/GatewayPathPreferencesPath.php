<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayPathPreferencesPath
 */
class GatewayPathPreferencesPath extends BaseModel
{
    /** @var integer */
    public int $cost;
    /** @var boolean */
    public bool $disabled;
    /** @var string */
    public string $gateway_ip;
    /** @var boolean */
    public bool $internet_access;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $networks;
    /** @var mixed */
    public $target_ips;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $wan_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}