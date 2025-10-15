<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteSetting extends BaseModel
{
    public $acl_policies;
    public $acl_tags;
    public $additional_config_cmds;
    public $analytic;
    public $ap_matching;
    public $ap_port_config;
    public int $ap_updown_threshold;
    public $auto_placement;
    public $auto_upgrade;
    public $auto_upgrade_esl;
    public bool $auto_upgrade_linecard;
    public int $bgp_neighbor_updown_threshold;
    public string $blacklist_url;
    public $ble_config;
    public bool $config_auto_revert;
    public $config_push_policy;
    public $created_time;
    public $critical_url_monitoring;
    public string $default_port_usage;
    public int $device_updown_threshold;
    public $dhcp_snooping;
    public $disabled_system_defined_port_usages;
    public $dns_servers;
    public $dns_suffix;
    public bool $enable_unii_4;
    public $engagement;
    public $evpn_options;
    public $extra_routes;
    public $extra_routes6;
    public $flags;
    public bool $for_site;
    public $gateway;
    public $gateway_additional_config_cmds;
    public $gateway_mgmt;
    public int $gateway_updown_threshold;
    public $id;
    public $juniper_srx;
    public $led;
    public $marvis;
    public $mist_nac;
    public $modified_time;
    public $mxedge;
    public $mxedge_mgmt;
    public $mxtunnels;
    public $networks;
    public $ntp_servers;
    public $occupancy;
    public $org_id;
    public $ospf_areas;
    public $paloalto_networks;
    public bool $persist_config_on_device;
    public $port_mirroring;
    public $port_usages;
    public $proxy;
    public $radio_config;
    public $radius_config;
    public $remote_syslog;
    public bool $remove_existing_configs;
    public bool $report_gatt;
    public $rogue;
    public $rtsa;
    public $simple_alert;
    public $site_id;
    public $skyatp;
    public $sle_thresholds;
    public $snmp_config;
    public $srx_app;
    public $ssh_keys;
    public $ssr;
    public $status_portal;
    public $switch;
    public $switch_matching;
    public $switch_mgmt;
    public int $switch_updown_threshold;
    public $synthetic_test;
    public bool $track_anonymous_devices;
    public $tunterm_monitoring;
    public bool $tunterm_monitoring_disabled;
    public $tunterm_multicast_config;
    public $uplink_port_config;
    public $vars;
    public $vna;
    public int $vpn_path_updown_threshold;
    public int $vpn_peer_updown_threshold;
    public $vrf_config;
    public $vrf_instances;
    public $vrrp_groups;
    public $vs_instance;
    public $wan_vna;
    public string $watched_station_url;
    public string $whitelist_url;
    public $wids;
    public $wifi;
    public $wired_vna;
    public $zone_occupancy_alert;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}