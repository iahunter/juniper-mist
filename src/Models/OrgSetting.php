<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgSetting extends BaseModel
{
    public int $ap_updown_threshold;
    public $api_policy;
    public $auto_device_naming;
    public $auto_deviceprofile_assignment;
    public $auto_site_assignment;
    public string $blacklist_url;
    public $cacerts;
    public $celona;
    public $cloudshark;
    public $cradlepoint;
    public $created_time;
    public $device_cert;
    public int $device_updown_threshold;
    public bool $disable_pcap;
    public bool $disable_remote_shell;
    public bool $for_site;
    public $gateway_mgmt;
    public int $gateway_updown_threshold;
    public $id;
    public $installer;
    public $jcloud;
    public $jcloud_ra;
    public $juniper;
    public $juniper_srx;
    public $junos_shell_access;
    public $marvis;
    public $mgmt;
    public $mist_nac;
    public $modified_time;
    public $msp_id;
    public $mxedge_mgmt;
    public $optic_port_config;
    public $org_id;
    public $password_policy;
    public $pcap;
    public bool $pcap_bucket_verified;
    public $security;
    public $simple_alert;
    public $ssr;
    public $switch;
    public $switch_mgmt;
    public int $switch_updown_threshold;
    public $synthetic_test;
    public $tags;
    public int $ui_idle_timeout;
    public bool $ui_no_tracking;
    public $vpn_options;
    public $wan_pma;
    public $wired_pma;
    public $wireless_pma;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}