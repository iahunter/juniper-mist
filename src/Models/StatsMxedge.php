<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsMxedge extends BaseModel
{
    public $cpu_stat;
    public $created_time;
    public bool $fips_enabled;
    public bool $for_site;
    public $fwupdate;
    public $id;
    public string $idrac_version;
    public $ip_stat;
    public $lag_stat;
    public $last_seen;
    public string $mac;
    public $memory_stat;
    public string $model;
    public $modified_time;
    public bool $mxagent_registered;
    public string $mxcluster_id;
    public string $name;
    public int $num_tunnels;
    public $oob_ip_config;
    public $oob_ip_stat;
    public $org_id;
    public $port_stat;
    public string $serial;
    public $service_stat;
    public $services;
    public $site_id;
    public string $status;
    public $tunterm_ip_config;
    public $tunterm_port_config;
    public bool $tunterm_registered;
    public $tunterm_stat;
    public int $uptime;
    public string $virtualization_type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}