<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model JunosIpConfig
 */
class JunosIpConfig extends BaseModel
{
    /** @var mixed */
    public $dns;
    /** @var mixed */
    public $dns_suffix;
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

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}