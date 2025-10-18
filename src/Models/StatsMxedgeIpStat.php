<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsMxedgeIpStat
 */
class StatsMxedgeIpStat extends BaseModel
{
    /** @var string */
    public string $ip;
    /** @var string */
    public string $ip6;
    /** @var object */
    public $ips;
    /** @var object */
    public $macs;
    /** @var string */
    public string $netmask;
    /** @var string */
    public string $netmask6;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}