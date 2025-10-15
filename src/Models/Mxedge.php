<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Mxedge extends BaseModel
{
    public $created_time;
    public bool $for_site;
    public $id;
    public string $magic;
    public string $model;
    public $modified_time;
    public bool $mxagent_registered;
    public string $mxcluster_id;
    public $mxedge_mgmt;
    public string $name;
    public string $note;
    public $ntp_servers;
    public $oob_ip_config;
    public $org_id;
    public $proxy;
    public $services;
    public $site_id;
    public $tunterm_dhcpd_config;
    public array $tunterm_extra_routes;
    public $tunterm_igmp_snooping_config;
    public $tunterm_ip_config;
    public $tunterm_monitoring;
    public $tunterm_multicast_config;
    public array $tunterm_other_ip_configs;
    public $tunterm_port_config;
    public bool $tunterm_registered;
    public $tunterm_switch_config;
    public $versions;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}