<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Mxcluster extends BaseModel
{
    public $created_time;
    public bool $for_site;
    public $id;
    public $mist_das;
    public $mist_nac;
    public $modified_time;
    public $mxedge_mgmt;
    public string $name;
    public $org_id;
    public $proxy;
    public $radsec;
    public $radsec_tls;
    public $site_id;
    public $tunterm_ap_subnets;
    public $tunterm_dhcpd_config;
    public $tunterm_extra_routes;
    public $tunterm_hosts;
    public $tunterm_hosts_order;
    public $tunterm_hosts_selection;
    public $tunterm_monitoring;
    public bool $tunterm_monitoring_disabled;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}