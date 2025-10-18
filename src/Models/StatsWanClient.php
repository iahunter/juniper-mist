<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsWanClient
 */
class StatsWanClient extends BaseModel
{
    /** @var number */
    public float $dhcp_expire_time;
    /** @var number */
    public float $dhcp_start_time;
    /** @var mixed */
    public $hostname;
    /** @var mixed */
    public $ip;
    /** @var string */
    public string $ip_src;
    /** @var string */
    public string $last_hostname;
    /** @var string */
    public string $last_ip;
    /** @var string */
    public string $mfg;
    /** @var string */
    public string $network;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $wcid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}