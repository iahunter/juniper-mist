<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model IpStat
 */
class IpStat extends BaseModel
{
    /** @var string */
    public string $dhcp_server;
    /** @var mixed */
    public $dns;
    /** @var mixed */
    public $dns_suffix;
    /** @var string */
    public string $gateway;
    /** @var string */
    public string $gateway6;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $ip6;
    /** @var object */
    public $ips;
    /** @var string */
    public string $netmask;
    /** @var string */
    public string $netmask6;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}