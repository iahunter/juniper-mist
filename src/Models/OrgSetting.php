<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSetting
 */
class OrgSetting extends BaseModel
{
    /** @var integer */
    public int $ap_updown_threshold;
    /** @var mixed */
    public $api_policy;
    /** @var mixed */
    public $auto_device_naming;
    /** @var mixed */
    public $auto_deviceprofile_assignment;
    /** @var mixed */
    public $auto_site_assignment;
    /** @var string */
    public string $blacklist_url;
    /** @var mixed */
    public $cacerts;
    /** @var mixed */
    public $celona;
    /** @var mixed */
    public $cloudshark;
    /** @var mixed */
    public $cradlepoint;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $device_cert;
    /** @var integer */
    public int $device_updown_threshold;
    /** @var boolean */
    public bool $disable_pcap;
    /** @var boolean */
    public bool $disable_remote_shell;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $gateway_mgmt;
    /** @var integer */
    public int $gateway_updown_threshold;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $installer;
    /** @var mixed */
    public $jcloud;
    /** @var mixed */
    public $jcloud_ra;
    /** @var mixed */
    public $juniper;
    /** @var mixed */
    public $juniper_srx;
    /** @var mixed */
    public $junos_shell_access;
    /** @var mixed */
    public $marvis;
    /** @var mixed */
    public $mgmt;
    /** @var mixed */
    public $mist_nac;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $msp_id;
    /** @var mixed */
    public $mxedge_mgmt;
    /** @var mixed */
    public $optic_port_config;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $password_policy;
    /** @var mixed */
    public $pcap;
    /** @var boolean */
    public bool $pcap_bucket_verified;
    /** @var mixed */
    public $security;
    /** @var mixed */
    public $simple_alert;
    /** @var mixed */
    public $ssr;
    /** @var mixed */
    public $switch;
    /** @var mixed */
    public $switch_mgmt;
    /** @var integer */
    public int $switch_updown_threshold;
    /** @var mixed */
    public $synthetic_test;
    /** @var mixed */
    public $tags;
    /** @var integer */
    public int $ui_idle_timeout;
    /** @var boolean */
    public bool $ui_no_tracking;
    /** @var mixed */
    public $vpn_options;
    /** @var mixed */
    public $wan_pma;
    /** @var mixed */
    public $wired_pma;
    /** @var mixed */
    public $wireless_pma;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}