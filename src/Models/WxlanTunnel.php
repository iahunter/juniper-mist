<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WxlanTunnel
 */
class WxlanTunnel extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $dmvpn;
    /** @var boolean */
    public bool $for_mgmt;
    /** @var boolean */
    public bool $for_site;
    /** @var integer */
    public int $hello_interval;
    /** @var integer */
    public int $hello_retries;
    /** @var string */
    public string $hostname;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $ipsec;
    /** @var boolean */
    public bool $is_static;
    /** @var mixed */
    public $modified_time;
    /** @var integer */
    public int $mtu;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $peers;
    /** @var string */
    public string $router_id;
    /** @var string */
    public string $secret;
    /** @var mixed */
    public $sessions;
    /** @var mixed */
    public $site_id;
    /** @var integer */
    public int $udp_port;
    /** @var boolean */
    public bool $use_udp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}