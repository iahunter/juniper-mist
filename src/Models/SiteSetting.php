<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSetting
 */
class SiteSetting extends BaseModel
{
    /** @var mixed */
    public $acl_policies;
    /** @var mixed */
    public $acl_tags;
    /** @var mixed */
    public $additional_config_cmds;
    /** @var mixed */
    public $analytic;
    /** @var mixed */
    public $ap_matching;
    /** @var mixed */
    public $ap_port_config;
    /** @var integer */
    public int $ap_updown_threshold;
    /** @var mixed */
    public $auto_placement;
    /** @var mixed */
    public $auto_upgrade;
    /** @var mixed */
    public $auto_upgrade_esl;
    /** @var boolean */
    public bool $auto_upgrade_linecard;
    /** @var integer */
    public int $bgp_neighbor_updown_threshold;
    /** @var string */
    public string $blacklist_url;
    /** @var mixed */
    public $ble_config;
    /** @var boolean */
    public bool $config_auto_revert;
    /** @var mixed */
    public $config_push_policy;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $critical_url_monitoring;
    /** @var string */
    public string $default_port_usage;
    /** @var integer */
    public int $device_updown_threshold;
    /** @var mixed */
    public $dhcp_snooping;
    /** @var mixed */
    public $disabled_system_defined_port_usages;
    /** @var mixed */
    public $dns_servers;
    /** @var mixed */
    public $dns_suffix;
    /** @var boolean */
    public bool $enable_unii_4;
    /** @var mixed */
    public $engagement;
    /** @var mixed */
    public $evpn_options;
    /** @var mixed */
    public $extra_routes;
    /** @var mixed */
    public $extra_routes6;
    /** @var mixed */
    public $flags;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $gateway;
    /** @var mixed */
    public $gateway_additional_config_cmds;
    /** @var mixed */
    public $gateway_mgmt;
    /** @var integer */
    public int $gateway_updown_threshold;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $juniper_srx;
    /** @var mixed */
    public $led;
    /** @var mixed */
    public $marvis;
    /** @var mixed */
    public $mist_nac;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $mxedge;
    /** @var mixed */
    public $mxedge_mgmt;
    /** @var mixed */
    public $mxtunnels;
    /** @var mixed */
    public $networks;
    /** @var mixed */
    public $ntp_servers;
    /** @var mixed */
    public $occupancy;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $ospf_areas;
    /** @var mixed */
    public $paloalto_networks;
    /** @var boolean */
    public bool $persist_config_on_device;
    /** @var mixed */
    public $port_mirroring;
    /** @var mixed */
    public $port_usages;
    /** @var mixed */
    public $proxy;
    /** @var mixed */
    public $radio_config;
    /** @var mixed */
    public $radius_config;
    /** @var mixed */
    public $remote_syslog;
    /** @var boolean */
    public bool $remove_existing_configs;
    /** @var boolean */
    public bool $report_gatt;
    /** @var mixed */
    public $rogue;
    /** @var mixed */
    public $rtsa;
    /** @var mixed */
    public $simple_alert;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $skyatp;
    /** @var mixed */
    public $sle_thresholds;
    /** @var mixed */
    public $snmp_config;
    /** @var mixed */
    public $srx_app;
    /** @var mixed */
    public $ssh_keys;
    /** @var mixed */
    public $ssr;
    /** @var mixed */
    public $status_portal;
    /** @var mixed */
    public $switch;
    /** @var mixed */
    public $switch_matching;
    /** @var mixed */
    public $switch_mgmt;
    /** @var integer */
    public int $switch_updown_threshold;
    /** @var mixed */
    public $synthetic_test;
    /** @var boolean */
    public bool $track_anonymous_devices;
    /** @var mixed */
    public $tunterm_monitoring;
    /** @var boolean */
    public bool $tunterm_monitoring_disabled;
    /** @var mixed */
    public $tunterm_multicast_config;
    /** @var mixed */
    public $uplink_port_config;
    /** @var mixed */
    public $vars;
    /** @var mixed */
    public $vna;
    /** @var integer */
    public int $vpn_path_updown_threshold;
    /** @var integer */
    public int $vpn_peer_updown_threshold;
    /** @var mixed */
    public $vrf_config;
    /** @var mixed */
    public $vrf_instances;
    /** @var mixed */
    public $vrrp_groups;
    /** @var mixed */
    public $vs_instance;
    /** @var mixed */
    public $wan_vna;
    /** @var string */
    public string $watched_station_url;
    /** @var string */
    public string $whitelist_url;
    /** @var mixed */
    public $wids;
    /** @var mixed */
    public $wifi;
    /** @var mixed */
    public $wired_vna;
    /** @var mixed */
    public $zone_occupancy_alert;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}