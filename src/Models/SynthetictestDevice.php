<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SynthetictestDevice
 */
class SynthetictestDevice extends BaseModel
{
    /** @var string */
    public string $host;
    /** @var string */
    public string $hostname;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $password;
    /** @var integer */
    public int $ping_count;
    /** @var boolean */
    public bool $ping_details;
    /** @var integer */
    public int $ping_size;
    /** @var string */
    public string $port_id;
    /** @var mixed */
    public $protocol;
    /** @var string */
    public string $tenant;
    /** @var integer */
    public int $timeout;
    /** @var integer */
    public int $traceroute_udp_port;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $url;
    /** @var string */
    public string $username;
    /** @var mixed */
    public $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}