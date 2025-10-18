<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model JunosOtherIpConfig
 */
class JunosOtherIpConfig extends BaseModel
{
    /** @var boolean */
    public bool $evpn_anycast;
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
    public $type6;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}