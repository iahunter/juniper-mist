<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsMxedgeOobIpStat
 */
class StatsMxedgeOobIpStat extends BaseModel
{
    /** @var mixed */
    public $dns;
    /** @var string */
    public string $gateway;
    /** @var string */
    public string $gateway6;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $ip6;
    /** @var string */
    public string $netmask;
    /** @var string */
    public string $netmask6;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $type8;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}