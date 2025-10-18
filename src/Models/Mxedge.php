<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Mxedge
 */
class Mxedge extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $magic;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $modified_time;
    /** @var boolean */
    public bool $mxagent_registered;
    /** @var string */
    public string $mxcluster_id;
    /** @var mixed */
    public $mxedge_mgmt;
    /** @var string */
    public string $name;
    /** @var string */
    public string $note;
    /** @var mixed */
    public $ntp_servers;
    /** @var mixed */
    public $oob_ip_config;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $proxy;
    /** @var mixed */
    public $services;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $tunterm_dhcpd_config;
    /** @var object */
    public $tunterm_extra_routes;
    /** @var mixed */
    public $tunterm_igmp_snooping_config;
    /** @var mixed */
    public $tunterm_ip_config;
    /** @var mixed */
    public $tunterm_monitoring;
    /** @var mixed */
    public $tunterm_multicast_config;
    /** @var object */
    public $tunterm_other_ip_configs;
    /** @var mixed */
    public $tunterm_port_config;
    /** @var boolean */
    public bool $tunterm_registered;
    /** @var mixed */
    public $tunterm_switch_config;
    /** @var mixed */
    public $versions;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}