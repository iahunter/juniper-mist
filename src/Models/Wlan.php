<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Wlan extends BaseModel
{
    public bool $acct_immediate_update;
    public int $acct_interim_interval;
    public $acct_servers;
    public $airwatch;
    public bool $allow_ipv6_ndp;
    public bool $allow_mdns;
    public bool $allow_ssdp;
    public $ap_ids;
    public $app_limit;
    public $app_qos;
    public $apply_to;
    public bool $arp_filter;
    public $auth;
    public $auth_server_selection;
    public $auth_servers;
    public string $auth_servers_nas_id;
    public string $auth_servers_nas_ip;
    public int $auth_servers_retries;
    public int $auth_servers_timeout;
    public string $band;
    public bool $band_steer;
    public bool $band_steer_force_band5;
    public $bands;
    public bool $block_blacklist_clients;
    public $bonjour;
    public $cisco_cwa;
    public $client_limit_down;
    public bool $client_limit_down_enabled;
    public $client_limit_up;
    public bool $client_limit_up_enabled;
    public $coa_servers;
    public $created_time;
    public bool $disable_11ax;
    public bool $disable_11be;
    public bool $disable_ht_vht_rates;
    public bool $disable_uapsd;
    public bool $disable_v1_roam_notify;
    public bool $disable_v2_roam_notify;
    public bool $disable_when_gateway_unreachable;
    public bool $disable_when_mxtunnel_down;
    public bool $disable_wmm;
    public $dns_server_rewrite;
    public int $dtim;
    public $dynamic_psk;
    public $dynamic_vlan;
    public bool $enable_local_keycaching;
    public bool $enable_wireless_bridging;
    public bool $enable_wireless_bridging_dhcp_tracking;
    public bool $enabled;
    public bool $fast_dot1x_timers;
    public bool $for_site;
    public bool $hide_ssid;
    public bool $hostname_ie;
    public $hotspot20;
    public $id;
    public $inject_dhcp_option_82;
    public $interface;
    public bool $isolation;
    public bool $l2_isolation;
    public bool $legacy_overds;
    public bool $limit_bcast;
    public bool $limit_probe_response;
    public int $max_idletime;
    public int $max_num_clients;
    public $mist_nac;
    public $modified_time;
    public $msp_id;
    public string $mxtunnel_id;
    public $mxtunnel_ids;
    public $mxtunnel_name;
    public bool $no_static_dns;
    public bool $no_static_ip;
    public $org_id;
    public $portal;
    public $portal_allowed_hostnames;
    public $portal_allowed_subnets;
    public string $portal_api_secret;
    public $portal_denied_hostnames;
    public string $portal_image;
    public string $portal_sso_url;
    public string $portal_template_url;
    public $qos;
    public $radsec;
    public $rateset;
    public bool $reconnect_clients_when_roaming_mxcluster;
    public $roam_mode;
    public $schedule;
    public $site_id;
    public bool $sle_excluded;
    public string $ssid;
    public string $template_id;
    public string $thumbnail;
    public bool $use_eapol_v1;
    public bool $vlan_enabled;
    public $vlan_id;
    public $vlan_ids;
    public bool $vlan_pooling;
    public $wlan_limit_down;
    public bool $wlan_limit_down_enabled;
    public $wlan_limit_up;
    public bool $wlan_limit_up_enabled;
    public $wxtag_ids;
    public string $wxtunnel_id;
    public string $wxtunnel_remote_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}