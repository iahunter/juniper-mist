<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Wlan
 */
class Wlan extends BaseModel
{
    /** @var boolean */
    public bool $acct_immediate_update;
    /** @var integer */
    public int $acct_interim_interval;
    /** @var mixed */
    public $acct_servers;
    /** @var mixed */
    public $airwatch;
    /** @var boolean */
    public bool $allow_ipv6_ndp;
    /** @var boolean */
    public bool $allow_mdns;
    /** @var boolean */
    public bool $allow_ssdp;
    /** @var mixed */
    public $ap_ids;
    /** @var mixed */
    public $app_limit;
    /** @var mixed */
    public $app_qos;
    /** @var mixed */
    public $apply_to;
    /** @var boolean */
    public bool $arp_filter;
    /** @var mixed */
    public $auth;
    /** @var mixed */
    public $auth_server_selection;
    /** @var mixed */
    public $auth_servers;
    /** @var string */
    public string $auth_servers_nas_id;
    /** @var string */
    public string $auth_servers_nas_ip;
    /** @var integer */
    public int $auth_servers_retries;
    /** @var integer */
    public int $auth_servers_timeout;
    /** @var string */
    public string $band;
    /** @var boolean */
    public bool $band_steer;
    /** @var boolean */
    public bool $band_steer_force_band5;
    /** @var mixed */
    public $bands;
    /** @var boolean */
    public bool $block_blacklist_clients;
    /** @var mixed */
    public $bonjour;
    /** @var mixed */
    public $cisco_cwa;
    /** @var mixed */
    public $client_limit_down;
    /** @var boolean */
    public bool $client_limit_down_enabled;
    /** @var mixed */
    public $client_limit_up;
    /** @var boolean */
    public bool $client_limit_up_enabled;
    /** @var mixed */
    public $coa_servers;
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $disable_11ax;
    /** @var boolean */
    public bool $disable_11be;
    /** @var boolean */
    public bool $disable_ht_vht_rates;
    /** @var boolean */
    public bool $disable_uapsd;
    /** @var boolean */
    public bool $disable_v1_roam_notify;
    /** @var boolean */
    public bool $disable_v2_roam_notify;
    /** @var boolean */
    public bool $disable_when_gateway_unreachable;
    /** @var boolean */
    public bool $disable_when_mxtunnel_down;
    /** @var boolean */
    public bool $disable_wmm;
    /** @var mixed */
    public $dns_server_rewrite;
    /** @var integer */
    public int $dtim;
    /** @var mixed */
    public $dynamic_psk;
    /** @var mixed */
    public $dynamic_vlan;
    /** @var boolean */
    public bool $enable_local_keycaching;
    /** @var boolean */
    public bool $enable_wireless_bridging;
    /** @var boolean */
    public bool $enable_wireless_bridging_dhcp_tracking;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $fast_dot1x_timers;
    /** @var boolean */
    public bool $for_site;
    /** @var boolean */
    public bool $hide_ssid;
    /** @var boolean */
    public bool $hostname_ie;
    /** @var mixed */
    public $hotspot20;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $inject_dhcp_option_82;
    /** @var mixed */
    public $interface;
    /** @var boolean */
    public bool $isolation;
    /** @var boolean */
    public bool $l2_isolation;
    /** @var boolean */
    public bool $legacy_overds;
    /** @var boolean */
    public bool $limit_bcast;
    /** @var boolean */
    public bool $limit_probe_response;
    /** @var integer */
    public int $max_idletime;
    /** @var integer */
    public int $max_num_clients;
    /** @var mixed */
    public $mist_nac;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $msp_id;
    /** @var string */
    public string $mxtunnel_id;
    /** @var mixed */
    public $mxtunnel_ids;
    /** @var mixed */
    public $mxtunnel_name;
    /** @var boolean */
    public bool $no_static_dns;
    /** @var boolean */
    public bool $no_static_ip;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $portal;
    /** @var mixed */
    public $portal_allowed_hostnames;
    /** @var mixed */
    public $portal_allowed_subnets;
    /** @var string */
    public string $portal_api_secret;
    /** @var mixed */
    public $portal_denied_hostnames;
    /** @var string */
    public string $portal_image;
    /** @var string */
    public string $portal_sso_url;
    /** @var string */
    public string $portal_template_url;
    /** @var mixed */
    public $qos;
    /** @var mixed */
    public $radsec;
    /** @var mixed */
    public $rateset;
    /** @var boolean */
    public bool $reconnect_clients_when_roaming_mxcluster;
    /** @var mixed */
    public $roam_mode;
    /** @var mixed */
    public $schedule;
    /** @var mixed */
    public $site_id;
    /** @var boolean */
    public bool $sle_excluded;
    /** @var string */
    public string $ssid;
    /** @var string */
    public string $template_id;
    /** @var string */
    public string $thumbnail;
    /** @var boolean */
    public bool $use_eapol_v1;
    /** @var boolean */
    public bool $vlan_enabled;
    /** @var mixed */
    public $vlan_id;
    /** @var mixed */
    public $vlan_ids;
    /** @var boolean */
    public bool $vlan_pooling;
    /** @var mixed */
    public $wlan_limit_down;
    /** @var boolean */
    public bool $wlan_limit_down_enabled;
    /** @var mixed */
    public $wlan_limit_up;
    /** @var boolean */
    public bool $wlan_limit_up_enabled;
    /** @var mixed */
    public $wxtag_ids;
    /** @var string */
    public string $wxtunnel_id;
    /** @var string */
    public string $wxtunnel_remote_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}