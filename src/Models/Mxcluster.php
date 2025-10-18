<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Mxcluster
 */
class Mxcluster extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $mist_das;
    /** @var mixed */
    public $mist_nac;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $mxedge_mgmt;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $proxy;
    /** @var mixed */
    public $radsec;
    /** @var mixed */
    public $radsec_tls;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $tunterm_ap_subnets;
    /** @var mixed */
    public $tunterm_dhcpd_config;
    /** @var mixed */
    public $tunterm_extra_routes;
    /** @var mixed */
    public $tunterm_hosts;
    /** @var mixed */
    public $tunterm_hosts_order;
    /** @var mixed */
    public $tunterm_hosts_selection;
    /** @var mixed */
    public $tunterm_monitoring;
    /** @var boolean */
    public bool $tunterm_monitoring_disabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}