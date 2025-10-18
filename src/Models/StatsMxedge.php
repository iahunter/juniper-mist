<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsMxedge
 */
class StatsMxedge extends BaseModel
{
    /** @var mixed */
    public $cpu_stat;
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $fips_enabled;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $fwupdate;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $idrac_version;
    /** @var mixed */
    public $ip_stat;
    /** @var mixed */
    public $lag_stat;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $memory_stat;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $modified_time;
    /** @var boolean */
    public bool $mxagent_registered;
    /** @var string */
    public string $mxcluster_id;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $num_tunnels;
    /** @var mixed */
    public $oob_ip_config;
    /** @var mixed */
    public $oob_ip_stat;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $port_stat;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $service_stat;
    /** @var mixed */
    public $services;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $status;
    /** @var mixed */
    public $tunterm_ip_config;
    /** @var mixed */
    public $tunterm_port_config;
    /** @var boolean */
    public bool $tunterm_registered;
    /** @var mixed */
    public $tunterm_stat;
    /** @var integer */
    public int $uptime;
    /** @var string */
    public string $virtualization_type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}