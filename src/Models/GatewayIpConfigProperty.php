<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayIpConfigProperty
 */
class GatewayIpConfigProperty extends BaseModel
{
    /** @var string */
    public string $ip;
    /** @var string */
    public string $ip6;
    /** @var string */
    public string $netmask;
    /** @var string */
    public string $netmask6;
    /** @var mixed */
    public $secondary_ips;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $type6;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}