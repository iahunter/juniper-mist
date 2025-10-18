<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DhcpdConfigProperty
 */
class DhcpdConfigProperty extends BaseModel
{
    /** @var mixed */
    public $dns_servers;
    /** @var mixed */
    public $dns_suffix;
    /** @var mixed */
    public $fixed_bindings;
    /** @var string */
    public string $gateway;
    /** @var string */
    public string $ip6_end;
    /** @var string */
    public string $ip6_start;
    /** @var string */
    public string $ip_end;
    /** @var string */
    public string $ip_start;
    /** @var integer */
    public int $lease_time;
    /** @var mixed */
    public $options;
    /** @var boolean */
    public bool $server_id_override;
    /** @var mixed */
    public $servers;
    /** @var mixed */
    public $serversv6;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $type6;
    /** @var mixed */
    public $vendor_encapsulated;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}