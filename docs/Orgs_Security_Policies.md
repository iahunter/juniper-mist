# Orgs Security Policies API

## `GET /api/v1/orgs/{org_id}/secpolicies`

**Summary:** listOrgSecPolicies

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/secpolicies`

**Summary:** createOrgSecPolicy

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "wlans": [
    {
      "acct_immediate_update": true,
      "acct_interim_interval": 0,
      "acct_servers": [
        {
          "host": "1.2.3.4",
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "1122334455",
          "keywrap_mack": "1122334455",
          "port": null,
          "secret": "testing123"
        }
      ],
      "airwatch": {
        "api_key": "aHhlbGxvYXNkZmFzZGZhc2Rmc2RmCg==\"",
        "console_url": "https://hs1.airwatchportals.com",
        "enabled": true,
        "password": "user1",
        "username": "test123"
      },
      "allow_ipv6_ndp": true,
      "allow_mdns": true,
      "allow_ssdp": true,
      "ap_ids": [
        "string_example"
      ],
      "app_limit": {
        "apps": {},
        "enabled": true,
        "wxtag_ids": {}
      },
      "app_qos": {
        "apps": {},
        "enabled": true,
        "others": [
          {
            "dscp": null,
            "dst_subnet": "10.2.0.0/16",
            "port_ranges": "80,1024-6553",
            "protocol": "udp",
            "src_subnet": "10.2.0.0/16"
          }
        ]
      },
      "apply_to": "string_example",
      "arp_filter": true,
      "auth": {
        "anticlog_threshold": 16,
        "eap_reauth": true,
        "enable_mac_auth": true,
        "key_idx": 123,
        "keys": [
          "string_example"
        ],
        "multi_psk_only": true,
        "owe": "string_example",
        "pairwise": [
          "wpa3"
        ],
        "private_wlan": true,
        "psk": "foryoureyesonly",
        "type": "psk",
        "wep_as_secondary_auth": true
      },
      "auth_server_selection": "ordered",
      "auth_servers": [
        {
          "host": "1.2.3.4",
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "1122334455",
          "keywrap_mack": "1122334455",
          "port": null,
          "require_message_authenticator": true,
          "secret": "testing123"
        }
      ],
      "auth_servers_nas_id": "5c5b350e0101-nas",
      "auth_servers_nas_ip": "15.3.1.5",
      "auth_servers_retries": 5,
      "auth_servers_timeout": 123,
      "band": "string_example",
      "band_steer": true,
      "band_steer_force_band5": true,
      "bands": [
        "string_example"
      ],
      "block_blacklist_clients": true,
      "bonjour": {
        "additional_vlan_ids": null,
        "enabled": true,
        "services": {}
      },
      "cisco_cwa": {
        "allowed_hostnames": [
          "snapchat.com"
        ],
        "allowed_subnets": [
          "63.5.3.0/24"
        ],
        "blocked_subnets": [
          "192.168.0.0/16"
        ],
        "enabled": true
      },
      "client_limit_down": null,
      "client_limit_down_enabled": true,
      "client_limit_up": null,
      "client_limit_up_enabled": true,
      "coa_servers": [
        {
          "disable_event_timestamp_check": true,
          "enabled": true,
          "ip": "1.2.3.4",
          "port": null,
          "secret": "testing456"
        }
      ],
      "created_time": 1.23,
      "disable_11ax": true,
      "disable_11be": true,
      "disable_ht_vht_rates": true,
      "disable_uapsd": true,
      "disable_v1_roam_notify": true,
      "disable_v2_roam_notify": true,
      "disable_when_gateway_unreachable": true,
      "disable_when_mxtunnel_down": true,
      "disable_wmm": true,
      "dns_server_rewrite": {
        "enabled": true,
        "radius_groups": {}
      },
      "dtim": 123,
      "dynamic_psk": {
        "default_psk": "foryoureyesonly",
        "default_vlan_id": null,
        "enabled": true,
        "force_lookup": true,
        "source": "cloud_psks"
      },
      "dynamic_vlan": {
        "default_vlan_id": null,
        "default_vlan_ids": [
          null
        ],
        "enabled": true,
        "local_vlan_ids": [
          null
        ],
        "type": "airespace-interface-name",
        "vlans": {}
      },
      "enable_local_keycaching": true,
      "enable_wireless_bridging": true,
      "enable_wireless_bridging_dhcp_tracking": true,
      "enabled": true,
      "fast_dot1x_timers": true,
      "for_site": true,
      "hide_ssid": true,
      "hostname_ie": true,
      "hotspot20": {
        "domain_name": [
          "string_example"
        ],
        "enabled": true,
        "nai_realms": [
          "string_example"
        ],
        "operators": [
          "string_example"
        ],
        "rcoi": [
          "string_example"
        ],
        "venue_name": "some_name"
      },
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "inject_dhcp_option_82": {
        "circuit_id": "{{SSID}}:{{AP_MAC}}",
        "enabled": true
      },
      "interface": "all",
      "isolation": true,
      "l2_isolation": true,
      "legacy_overds": true,
      "limit_bcast": true,
      "limit_probe_response": true,
      "max_idletime": 1800,
      "max_num_clients": 123,
      "mist_nac": {
        "acct_interim_interval": 60,
        "auth_servers_retries": 3,
        "auth_servers_timeout": 5,
        "coa_enabled": true,
        "coa_port": 3799,
        "enabled": true,
        "fast_dot1x_timers": true,
        "network": "default",
        "source_ip": "1.2.3.4"
      },
      "modified_time": 1.23,
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "mxtunnel_id": "string_example",
      "mxtunnel_ids": [
        "08cd7499-5841-51c8-e663-fb16b6f3b45e"
      ],
      "mxtunnel_name": [
        "default"
      ],
      "no_static_dns": true,
      "no_static_ip": true,
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "portal": {
        "allow_wlan_id_roam": true,
        "amazon_client_id": "string_example",
        "amazon_client_secret": "string_example",
        "amazon_email_domains": [
          "string_example"
        ],
        "amazon_enabled": true,
        "amazon_expire": 123,
        "auth": "none",
        "azure_client_id": "string_example",
        "azure_client_secret": "string_example",
        "azure_enabled": true,
        "azure_expire": 123,
        "azure_tenant_id": "string_example",
        "broadnet_password": "password",
        "broadnet_sid": "MIST",
        "broadnet_user_id": "juniper",
        "bypass_when_cloud_down": true,
        "clickatell_api_key": "string_example",
        "cross_site": true,
        "email_enabled": true,
        "enabled": true,
        "expire": 1440,
        "external_portal_url": "string_example",
        "facebook_client_id": "string_example",
        "facebook_client_secret": "string_example",
        "facebook_email_domains": [
          "string_example"
        ],
        "facebook_enabled": true,
        "facebook_expire": 123,
        "forward": true,
        "forward_url": "https://abc.com/promotions",
        "google_client_id": "string_example",
        "google_client_secret": "string_example",
        "google_email_domains": [
          "string_example"
        ],
        "google_enabled": true,
        "google_expire": 123,
        "gupshup_password": "string_example",
        "gupshup_userid": "string_example",
        "microsoft_client_id": "string_example",
        "microsoft_client_secret": "string_example",
        "microsoft_email_domains": [
          "string_example"
        ],
        "microsoft_enabled": true,
        "microsoft_expire": 123,
        "passphrase_enabled": true,
        "passphrase_expire": 123,
        "password": "let me in",
        "predefined_sponsors_enabled": true,
        "predefined_sponsors_hide_email": true,
        "privacy": true,
        "puzzel_password": "string_example",
        "puzzel_service_id": "string_example",
        "puzzel_username": "string_example",
        "smsMessageFormat": "string_example",
        "sms_enabled": true,
        "sms_expire": 123,
        "sms_provider": "twilio",
        "smsglobal_api_key": "string_example",
        "smsglobal_api_secret": "string_example",
        "sponsor_auto_approve": true,
        "sponsor_email_domains": [
          "string_example"
        ],
        "sponsor_enabled": true,
        "sponsor_expire": 123,
        "sponsor_link_validity_duration": null,
        "sponsor_notify_all": true,
        "sponsor_status_notify": true,
        "sponsors": null,
        "sso_default_role": "string_example",
        "sso_forced_role": "string_example",
        "sso_idp_cert": "string_example",
        "sso_idp_sign_algo": "string_example",
        "sso_idp_sso_url": "string_example",
        "sso_issuer": "string_example",
        "sso_nameid_format": "string_example",
        "telstra_client_id": "string_example",
        "telstra_client_secret": "string_example",
        "twilio_auth_token": "af9dac44c344a875ab5d31cb7abcdefg",
        "twilio_phone_number": "+18548888888",
        "twilio_sid": "af9dac44c344a875ab5d31cb7abcdefg"
      },
      "portal_allowed_hostnames": [
        "string_example"
      ],
      "portal_allowed_subnets": [
        "string_example"
      ],
      "portal_api_secret": "EIfPMOykI3lMlDdNPub2WcbqT6dNOtWwmYHAd6bY",
      "portal_denied_hostnames": [
        "string_example"
      ],
      "portal_image": "https://url/to/image.png",
      "portal_sso_url": "string_example",
      "portal_template_url": "string_example",
      "qos": {
        "class": "best_effort",
        "overwrite": true
      },
      "radsec": {
        "coa_enabled": true,
        "enabled": true,
        "idle_timeout": null,
        "mxcluster_ids": [
          "572586b7-f97b-a22b-526c-8b97a3f609c4"
        ],
        "proxy_hosts": [
          "mxedge1.local"
        ],
        "server_name": "radsec.abc.com",
        "servers": [
          {
            "host": "1.1.1.1",
            "port": 1812
          }
        ],
        "use_mxedge": true,
        "use_site_mxedge": true
      },
      "rateset": {},
      "reconnect_clients_when_roaming_mxcluster": true,
      "roam_mode": "NONE",
      "schedule": {
        "enabled": true,
        "hours": {
          "fri": "09:00-17:00",
          "mon": "09:00-17:00",
          "sat": "09:00-17:00",
          "sun": "09:00-17:00",
          "thu": "09:00-17:00",
          "tue": "09:00-17:00",
          "wed": "09:00-17:00"
        }
      },
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sle_excluded": true,
      "ssid": "corporate",
      "template_id": "string_example",
      "thumbnail": "string_example",
      "use_eapol_v1": true,
      "vlan_enabled": true,
      "vlan_id": null,
      "vlan_ids": null,
      "vlan_pooling": true,
      "wlan_limit_down": null,
      "wlan_limit_down_enabled": true,
      "wlan_limit_up": null,
      "wlan_limit_up_enabled": true,
      "wxtag_ids": [
        "string_example"
      ],
      "wxtunnel_id": "string_example",
      "wxtunnel_remote_id": "string_example"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Secpolicy;

$model = new Secpolicy({
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "wlans": [
    {
      "acct_immediate_update": true,
      "acct_interim_interval": 0,
      "acct_servers": [
        {
          "host": "1.2.3.4",
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "1122334455",
          "keywrap_mack": "1122334455",
          "port": null,
          "secret": "testing123"
        }
      ],
      "airwatch": {
        "api_key": "aHhlbGxvYXNkZmFzZGZhc2Rmc2RmCg==\"",
        "console_url": "https://hs1.airwatchportals.com",
        "enabled": true,
        "password": "user1",
        "username": "test123"
      },
      "allow_ipv6_ndp": true,
      "allow_mdns": true,
      "allow_ssdp": true,
      "ap_ids": [
        "string_example"
      ],
      "app_limit": {
        "apps": {},
        "enabled": true,
        "wxtag_ids": {}
      },
      "app_qos": {
        "apps": {},
        "enabled": true,
        "others": [
          {
            "dscp": null,
            "dst_subnet": "10.2.0.0/16",
            "port_ranges": "80,1024-6553",
            "protocol": "udp",
            "src_subnet": "10.2.0.0/16"
          }
        ]
      },
      "apply_to": "string_example",
      "arp_filter": true,
      "auth": {
        "anticlog_threshold": 16,
        "eap_reauth": true,
        "enable_mac_auth": true,
        "key_idx": 123,
        "keys": [
          "string_example"
        ],
        "multi_psk_only": true,
        "owe": "string_example",
        "pairwise": [
          "wpa3"
        ],
        "private_wlan": true,
        "psk": "foryoureyesonly",
        "type": "psk",
        "wep_as_secondary_auth": true
      },
      "auth_server_selection": "ordered",
      "auth_servers": [
        {
          "host": "1.2.3.4",
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "1122334455",
          "keywrap_mack": "1122334455",
          "port": null,
          "require_message_authenticator": true,
          "secret": "testing123"
        }
      ],
      "auth_servers_nas_id": "5c5b350e0101-nas",
      "auth_servers_nas_ip": "15.3.1.5",
      "auth_servers_retries": 5,
      "auth_servers_timeout": 123,
      "band": "string_example",
      "band_steer": true,
      "band_steer_force_band5": true,
      "bands": [
        "string_example"
      ],
      "block_blacklist_clients": true,
      "bonjour": {
        "additional_vlan_ids": null,
        "enabled": true,
        "services": {}
      },
      "cisco_cwa": {
        "allowed_hostnames": [
          "snapchat.com"
        ],
        "allowed_subnets": [
          "63.5.3.0/24"
        ],
        "blocked_subnets": [
          "192.168.0.0/16"
        ],
        "enabled": true
      },
      "client_limit_down": null,
      "client_limit_down_enabled": true,
      "client_limit_up": null,
      "client_limit_up_enabled": true,
      "coa_servers": [
        {
          "disable_event_timestamp_check": true,
          "enabled": true,
          "ip": "1.2.3.4",
          "port": null,
          "secret": "testing456"
        }
      ],
      "created_time": 1.23,
      "disable_11ax": true,
      "disable_11be": true,
      "disable_ht_vht_rates": true,
      "disable_uapsd": true,
      "disable_v1_roam_notify": true,
      "disable_v2_roam_notify": true,
      "disable_when_gateway_unreachable": true,
      "disable_when_mxtunnel_down": true,
      "disable_wmm": true,
      "dns_server_rewrite": {
        "enabled": true,
        "radius_groups": {}
      },
      "dtim": 123,
      "dynamic_psk": {
        "default_psk": "foryoureyesonly",
        "default_vlan_id": null,
        "enabled": true,
        "force_lookup": true,
        "source": "cloud_psks"
      },
      "dynamic_vlan": {
        "default_vlan_id": null,
        "default_vlan_ids": [
          null
        ],
        "enabled": true,
        "local_vlan_ids": [
          null
        ],
        "type": "airespace-interface-name",
        "vlans": {}
      },
      "enable_local_keycaching": true,
      "enable_wireless_bridging": true,
      "enable_wireless_bridging_dhcp_tracking": true,
      "enabled": true,
      "fast_dot1x_timers": true,
      "for_site": true,
      "hide_ssid": true,
      "hostname_ie": true,
      "hotspot20": {
        "domain_name": [
          "string_example"
        ],
        "enabled": true,
        "nai_realms": [
          "string_example"
        ],
        "operators": [
          "string_example"
        ],
        "rcoi": [
          "string_example"
        ],
        "venue_name": "some_name"
      },
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "inject_dhcp_option_82": {
        "circuit_id": "{{SSID}}:{{AP_MAC}}",
        "enabled": true
      },
      "interface": "all",
      "isolation": true,
      "l2_isolation": true,
      "legacy_overds": true,
      "limit_bcast": true,
      "limit_probe_response": true,
      "max_idletime": 1800,
      "max_num_clients": 123,
      "mist_nac": {
        "acct_interim_interval": 60,
        "auth_servers_retries": 3,
        "auth_servers_timeout": 5,
        "coa_enabled": true,
        "coa_port": 3799,
        "enabled": true,
        "fast_dot1x_timers": true,
        "network": "default",
        "source_ip": "1.2.3.4"
      },
      "modified_time": 1.23,
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "mxtunnel_id": "string_example",
      "mxtunnel_ids": [
        "08cd7499-5841-51c8-e663-fb16b6f3b45e"
      ],
      "mxtunnel_name": [
        "default"
      ],
      "no_static_dns": true,
      "no_static_ip": true,
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "portal": {
        "allow_wlan_id_roam": true,
        "amazon_client_id": "string_example",
        "amazon_client_secret": "string_example",
        "amazon_email_domains": [
          "string_example"
        ],
        "amazon_enabled": true,
        "amazon_expire": 123,
        "auth": "none",
        "azure_client_id": "string_example",
        "azure_client_secret": "string_example",
        "azure_enabled": true,
        "azure_expire": 123,
        "azure_tenant_id": "string_example",
        "broadnet_password": "password",
        "broadnet_sid": "MIST",
        "broadnet_user_id": "juniper",
        "bypass_when_cloud_down": true,
        "clickatell_api_key": "string_example",
        "cross_site": true,
        "email_enabled": true,
        "enabled": true,
        "expire": 1440,
        "external_portal_url": "string_example",
        "facebook_client_id": "string_example",
        "facebook_client_secret": "string_example",
        "facebook_email_domains": [
          "string_example"
        ],
        "facebook_enabled": true,
        "facebook_expire": 123,
        "forward": true,
        "forward_url": "https://abc.com/promotions",
        "google_client_id": "string_example",
        "google_client_secret": "string_example",
        "google_email_domains": [
          "string_example"
        ],
        "google_enabled": true,
        "google_expire": 123,
        "gupshup_password": "string_example",
        "gupshup_userid": "string_example",
        "microsoft_client_id": "string_example",
        "microsoft_client_secret": "string_example",
        "microsoft_email_domains": [
          "string_example"
        ],
        "microsoft_enabled": true,
        "microsoft_expire": 123,
        "passphrase_enabled": true,
        "passphrase_expire": 123,
        "password": "let me in",
        "predefined_sponsors_enabled": true,
        "predefined_sponsors_hide_email": true,
        "privacy": true,
        "puzzel_password": "string_example",
        "puzzel_service_id": "string_example",
        "puzzel_username": "string_example",
        "smsMessageFormat": "string_example",
        "sms_enabled": true,
        "sms_expire": 123,
        "sms_provider": "twilio",
        "smsglobal_api_key": "string_example",
        "smsglobal_api_secret": "string_example",
        "sponsor_auto_approve": true,
        "sponsor_email_domains": [
          "string_example"
        ],
        "sponsor_enabled": true,
        "sponsor_expire": 123,
        "sponsor_link_validity_duration": null,
        "sponsor_notify_all": true,
        "sponsor_status_notify": true,
        "sponsors": null,
        "sso_default_role": "string_example",
        "sso_forced_role": "string_example",
        "sso_idp_cert": "string_example",
        "sso_idp_sign_algo": "string_example",
        "sso_idp_sso_url": "string_example",
        "sso_issuer": "string_example",
        "sso_nameid_format": "string_example",
        "telstra_client_id": "string_example",
        "telstra_client_secret": "string_example",
        "twilio_auth_token": "af9dac44c344a875ab5d31cb7abcdefg",
        "twilio_phone_number": "+18548888888",
        "twilio_sid": "af9dac44c344a875ab5d31cb7abcdefg"
      },
      "portal_allowed_hostnames": [
        "string_example"
      ],
      "portal_allowed_subnets": [
        "string_example"
      ],
      "portal_api_secret": "EIfPMOykI3lMlDdNPub2WcbqT6dNOtWwmYHAd6bY",
      "portal_denied_hostnames": [
        "string_example"
      ],
      "portal_image": "https://url/to/image.png",
      "portal_sso_url": "string_example",
      "portal_template_url": "string_example",
      "qos": {
        "class": "best_effort",
        "overwrite": true
      },
      "radsec": {
        "coa_enabled": true,
        "enabled": true,
        "idle_timeout": null,
        "mxcluster_ids": [
          "572586b7-f97b-a22b-526c-8b97a3f609c4"
        ],
        "proxy_hosts": [
          "mxedge1.local"
        ],
        "server_name": "radsec.abc.com",
        "servers": [
          {
            "host": "1.1.1.1",
            "port": 1812
          }
        ],
        "use_mxedge": true,
        "use_site_mxedge": true
      },
      "rateset": {},
      "reconnect_clients_when_roaming_mxcluster": true,
      "roam_mode": "NONE",
      "schedule": {
        "enabled": true,
        "hours": {
          "fri": "09:00-17:00",
          "mon": "09:00-17:00",
          "sat": "09:00-17:00",
          "sun": "09:00-17:00",
          "thu": "09:00-17:00",
          "tue": "09:00-17:00",
          "wed": "09:00-17:00"
        }
      },
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sle_excluded": true,
      "ssid": "corporate",
      "template_id": "string_example",
      "thumbnail": "string_example",
      "use_eapol_v1": true,
      "vlan_enabled": true,
      "vlan_id": null,
      "vlan_ids": null,
      "vlan_pooling": true,
      "wlan_limit_down": null,
      "wlan_limit_down_enabled": true,
      "wlan_limit_up": null,
      "wlan_limit_up_enabled": true,
      "wxtag_ids": [
        "string_example"
      ],
      "wxtunnel_id": "string_example",
      "wxtunnel_remote_id": "string_example"
    }
  ]
});
$resp = $client->orgs security policies->createOrgSecPolicy($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/secpolicies/{secpolicy_id}`

**Summary:** getOrgSecPolicy

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/secpolicies/{secpolicy_id}`

**Summary:** updateOrgSecPolicy

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "wlans": [
    {
      "acct_immediate_update": true,
      "acct_interim_interval": 0,
      "acct_servers": [
        {
          "host": "1.2.3.4",
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "1122334455",
          "keywrap_mack": "1122334455",
          "port": null,
          "secret": "testing123"
        }
      ],
      "airwatch": {
        "api_key": "aHhlbGxvYXNkZmFzZGZhc2Rmc2RmCg==\"",
        "console_url": "https://hs1.airwatchportals.com",
        "enabled": true,
        "password": "user1",
        "username": "test123"
      },
      "allow_ipv6_ndp": true,
      "allow_mdns": true,
      "allow_ssdp": true,
      "ap_ids": [
        "string_example"
      ],
      "app_limit": {
        "apps": {},
        "enabled": true,
        "wxtag_ids": {}
      },
      "app_qos": {
        "apps": {},
        "enabled": true,
        "others": [
          {
            "dscp": null,
            "dst_subnet": "10.2.0.0/16",
            "port_ranges": "80,1024-6553",
            "protocol": "udp",
            "src_subnet": "10.2.0.0/16"
          }
        ]
      },
      "apply_to": "string_example",
      "arp_filter": true,
      "auth": {
        "anticlog_threshold": 16,
        "eap_reauth": true,
        "enable_mac_auth": true,
        "key_idx": 123,
        "keys": [
          "string_example"
        ],
        "multi_psk_only": true,
        "owe": "string_example",
        "pairwise": [
          "wpa3"
        ],
        "private_wlan": true,
        "psk": "foryoureyesonly",
        "type": "psk",
        "wep_as_secondary_auth": true
      },
      "auth_server_selection": "ordered",
      "auth_servers": [
        {
          "host": "1.2.3.4",
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "1122334455",
          "keywrap_mack": "1122334455",
          "port": null,
          "require_message_authenticator": true,
          "secret": "testing123"
        }
      ],
      "auth_servers_nas_id": "5c5b350e0101-nas",
      "auth_servers_nas_ip": "15.3.1.5",
      "auth_servers_retries": 5,
      "auth_servers_timeout": 123,
      "band": "string_example",
      "band_steer": true,
      "band_steer_force_band5": true,
      "bands": [
        "string_example"
      ],
      "block_blacklist_clients": true,
      "bonjour": {
        "additional_vlan_ids": null,
        "enabled": true,
        "services": {}
      },
      "cisco_cwa": {
        "allowed_hostnames": [
          "snapchat.com"
        ],
        "allowed_subnets": [
          "63.5.3.0/24"
        ],
        "blocked_subnets": [
          "192.168.0.0/16"
        ],
        "enabled": true
      },
      "client_limit_down": null,
      "client_limit_down_enabled": true,
      "client_limit_up": null,
      "client_limit_up_enabled": true,
      "coa_servers": [
        {
          "disable_event_timestamp_check": true,
          "enabled": true,
          "ip": "1.2.3.4",
          "port": null,
          "secret": "testing456"
        }
      ],
      "created_time": 1.23,
      "disable_11ax": true,
      "disable_11be": true,
      "disable_ht_vht_rates": true,
      "disable_uapsd": true,
      "disable_v1_roam_notify": true,
      "disable_v2_roam_notify": true,
      "disable_when_gateway_unreachable": true,
      "disable_when_mxtunnel_down": true,
      "disable_wmm": true,
      "dns_server_rewrite": {
        "enabled": true,
        "radius_groups": {}
      },
      "dtim": 123,
      "dynamic_psk": {
        "default_psk": "foryoureyesonly",
        "default_vlan_id": null,
        "enabled": true,
        "force_lookup": true,
        "source": "cloud_psks"
      },
      "dynamic_vlan": {
        "default_vlan_id": null,
        "default_vlan_ids": [
          null
        ],
        "enabled": true,
        "local_vlan_ids": [
          null
        ],
        "type": "airespace-interface-name",
        "vlans": {}
      },
      "enable_local_keycaching": true,
      "enable_wireless_bridging": true,
      "enable_wireless_bridging_dhcp_tracking": true,
      "enabled": true,
      "fast_dot1x_timers": true,
      "for_site": true,
      "hide_ssid": true,
      "hostname_ie": true,
      "hotspot20": {
        "domain_name": [
          "string_example"
        ],
        "enabled": true,
        "nai_realms": [
          "string_example"
        ],
        "operators": [
          "string_example"
        ],
        "rcoi": [
          "string_example"
        ],
        "venue_name": "some_name"
      },
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "inject_dhcp_option_82": {
        "circuit_id": "{{SSID}}:{{AP_MAC}}",
        "enabled": true
      },
      "interface": "all",
      "isolation": true,
      "l2_isolation": true,
      "legacy_overds": true,
      "limit_bcast": true,
      "limit_probe_response": true,
      "max_idletime": 1800,
      "max_num_clients": 123,
      "mist_nac": {
        "acct_interim_interval": 60,
        "auth_servers_retries": 3,
        "auth_servers_timeout": 5,
        "coa_enabled": true,
        "coa_port": 3799,
        "enabled": true,
        "fast_dot1x_timers": true,
        "network": "default",
        "source_ip": "1.2.3.4"
      },
      "modified_time": 1.23,
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "mxtunnel_id": "string_example",
      "mxtunnel_ids": [
        "08cd7499-5841-51c8-e663-fb16b6f3b45e"
      ],
      "mxtunnel_name": [
        "default"
      ],
      "no_static_dns": true,
      "no_static_ip": true,
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "portal": {
        "allow_wlan_id_roam": true,
        "amazon_client_id": "string_example",
        "amazon_client_secret": "string_example",
        "amazon_email_domains": [
          "string_example"
        ],
        "amazon_enabled": true,
        "amazon_expire": 123,
        "auth": "none",
        "azure_client_id": "string_example",
        "azure_client_secret": "string_example",
        "azure_enabled": true,
        "azure_expire": 123,
        "azure_tenant_id": "string_example",
        "broadnet_password": "password",
        "broadnet_sid": "MIST",
        "broadnet_user_id": "juniper",
        "bypass_when_cloud_down": true,
        "clickatell_api_key": "string_example",
        "cross_site": true,
        "email_enabled": true,
        "enabled": true,
        "expire": 1440,
        "external_portal_url": "string_example",
        "facebook_client_id": "string_example",
        "facebook_client_secret": "string_example",
        "facebook_email_domains": [
          "string_example"
        ],
        "facebook_enabled": true,
        "facebook_expire": 123,
        "forward": true,
        "forward_url": "https://abc.com/promotions",
        "google_client_id": "string_example",
        "google_client_secret": "string_example",
        "google_email_domains": [
          "string_example"
        ],
        "google_enabled": true,
        "google_expire": 123,
        "gupshup_password": "string_example",
        "gupshup_userid": "string_example",
        "microsoft_client_id": "string_example",
        "microsoft_client_secret": "string_example",
        "microsoft_email_domains": [
          "string_example"
        ],
        "microsoft_enabled": true,
        "microsoft_expire": 123,
        "passphrase_enabled": true,
        "passphrase_expire": 123,
        "password": "let me in",
        "predefined_sponsors_enabled": true,
        "predefined_sponsors_hide_email": true,
        "privacy": true,
        "puzzel_password": "string_example",
        "puzzel_service_id": "string_example",
        "puzzel_username": "string_example",
        "smsMessageFormat": "string_example",
        "sms_enabled": true,
        "sms_expire": 123,
        "sms_provider": "twilio",
        "smsglobal_api_key": "string_example",
        "smsglobal_api_secret": "string_example",
        "sponsor_auto_approve": true,
        "sponsor_email_domains": [
          "string_example"
        ],
        "sponsor_enabled": true,
        "sponsor_expire": 123,
        "sponsor_link_validity_duration": null,
        "sponsor_notify_all": true,
        "sponsor_status_notify": true,
        "sponsors": null,
        "sso_default_role": "string_example",
        "sso_forced_role": "string_example",
        "sso_idp_cert": "string_example",
        "sso_idp_sign_algo": "string_example",
        "sso_idp_sso_url": "string_example",
        "sso_issuer": "string_example",
        "sso_nameid_format": "string_example",
        "telstra_client_id": "string_example",
        "telstra_client_secret": "string_example",
        "twilio_auth_token": "af9dac44c344a875ab5d31cb7abcdefg",
        "twilio_phone_number": "+18548888888",
        "twilio_sid": "af9dac44c344a875ab5d31cb7abcdefg"
      },
      "portal_allowed_hostnames": [
        "string_example"
      ],
      "portal_allowed_subnets": [
        "string_example"
      ],
      "portal_api_secret": "EIfPMOykI3lMlDdNPub2WcbqT6dNOtWwmYHAd6bY",
      "portal_denied_hostnames": [
        "string_example"
      ],
      "portal_image": "https://url/to/image.png",
      "portal_sso_url": "string_example",
      "portal_template_url": "string_example",
      "qos": {
        "class": "best_effort",
        "overwrite": true
      },
      "radsec": {
        "coa_enabled": true,
        "enabled": true,
        "idle_timeout": null,
        "mxcluster_ids": [
          "572586b7-f97b-a22b-526c-8b97a3f609c4"
        ],
        "proxy_hosts": [
          "mxedge1.local"
        ],
        "server_name": "radsec.abc.com",
        "servers": [
          {
            "host": "1.1.1.1",
            "port": 1812
          }
        ],
        "use_mxedge": true,
        "use_site_mxedge": true
      },
      "rateset": {},
      "reconnect_clients_when_roaming_mxcluster": true,
      "roam_mode": "NONE",
      "schedule": {
        "enabled": true,
        "hours": {
          "fri": "09:00-17:00",
          "mon": "09:00-17:00",
          "sat": "09:00-17:00",
          "sun": "09:00-17:00",
          "thu": "09:00-17:00",
          "tue": "09:00-17:00",
          "wed": "09:00-17:00"
        }
      },
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sle_excluded": true,
      "ssid": "corporate",
      "template_id": "string_example",
      "thumbnail": "string_example",
      "use_eapol_v1": true,
      "vlan_enabled": true,
      "vlan_id": null,
      "vlan_ids": null,
      "vlan_pooling": true,
      "wlan_limit_down": null,
      "wlan_limit_down_enabled": true,
      "wlan_limit_up": null,
      "wlan_limit_up_enabled": true,
      "wxtag_ids": [
        "string_example"
      ],
      "wxtunnel_id": "string_example",
      "wxtunnel_remote_id": "string_example"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Secpolicy;

$model = new Secpolicy({
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "wlans": [
    {
      "acct_immediate_update": true,
      "acct_interim_interval": 0,
      "acct_servers": [
        {
          "host": "1.2.3.4",
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "1122334455",
          "keywrap_mack": "1122334455",
          "port": null,
          "secret": "testing123"
        }
      ],
      "airwatch": {
        "api_key": "aHhlbGxvYXNkZmFzZGZhc2Rmc2RmCg==\"",
        "console_url": "https://hs1.airwatchportals.com",
        "enabled": true,
        "password": "user1",
        "username": "test123"
      },
      "allow_ipv6_ndp": true,
      "allow_mdns": true,
      "allow_ssdp": true,
      "ap_ids": [
        "string_example"
      ],
      "app_limit": {
        "apps": {},
        "enabled": true,
        "wxtag_ids": {}
      },
      "app_qos": {
        "apps": {},
        "enabled": true,
        "others": [
          {
            "dscp": null,
            "dst_subnet": "10.2.0.0/16",
            "port_ranges": "80,1024-6553",
            "protocol": "udp",
            "src_subnet": "10.2.0.0/16"
          }
        ]
      },
      "apply_to": "string_example",
      "arp_filter": true,
      "auth": {
        "anticlog_threshold": 16,
        "eap_reauth": true,
        "enable_mac_auth": true,
        "key_idx": 123,
        "keys": [
          "string_example"
        ],
        "multi_psk_only": true,
        "owe": "string_example",
        "pairwise": [
          "wpa3"
        ],
        "private_wlan": true,
        "psk": "foryoureyesonly",
        "type": "psk",
        "wep_as_secondary_auth": true
      },
      "auth_server_selection": "ordered",
      "auth_servers": [
        {
          "host": "1.2.3.4",
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "1122334455",
          "keywrap_mack": "1122334455",
          "port": null,
          "require_message_authenticator": true,
          "secret": "testing123"
        }
      ],
      "auth_servers_nas_id": "5c5b350e0101-nas",
      "auth_servers_nas_ip": "15.3.1.5",
      "auth_servers_retries": 5,
      "auth_servers_timeout": 123,
      "band": "string_example",
      "band_steer": true,
      "band_steer_force_band5": true,
      "bands": [
        "string_example"
      ],
      "block_blacklist_clients": true,
      "bonjour": {
        "additional_vlan_ids": null,
        "enabled": true,
        "services": {}
      },
      "cisco_cwa": {
        "allowed_hostnames": [
          "snapchat.com"
        ],
        "allowed_subnets": [
          "63.5.3.0/24"
        ],
        "blocked_subnets": [
          "192.168.0.0/16"
        ],
        "enabled": true
      },
      "client_limit_down": null,
      "client_limit_down_enabled": true,
      "client_limit_up": null,
      "client_limit_up_enabled": true,
      "coa_servers": [
        {
          "disable_event_timestamp_check": true,
          "enabled": true,
          "ip": "1.2.3.4",
          "port": null,
          "secret": "testing456"
        }
      ],
      "created_time": 1.23,
      "disable_11ax": true,
      "disable_11be": true,
      "disable_ht_vht_rates": true,
      "disable_uapsd": true,
      "disable_v1_roam_notify": true,
      "disable_v2_roam_notify": true,
      "disable_when_gateway_unreachable": true,
      "disable_when_mxtunnel_down": true,
      "disable_wmm": true,
      "dns_server_rewrite": {
        "enabled": true,
        "radius_groups": {}
      },
      "dtim": 123,
      "dynamic_psk": {
        "default_psk": "foryoureyesonly",
        "default_vlan_id": null,
        "enabled": true,
        "force_lookup": true,
        "source": "cloud_psks"
      },
      "dynamic_vlan": {
        "default_vlan_id": null,
        "default_vlan_ids": [
          null
        ],
        "enabled": true,
        "local_vlan_ids": [
          null
        ],
        "type": "airespace-interface-name",
        "vlans": {}
      },
      "enable_local_keycaching": true,
      "enable_wireless_bridging": true,
      "enable_wireless_bridging_dhcp_tracking": true,
      "enabled": true,
      "fast_dot1x_timers": true,
      "for_site": true,
      "hide_ssid": true,
      "hostname_ie": true,
      "hotspot20": {
        "domain_name": [
          "string_example"
        ],
        "enabled": true,
        "nai_realms": [
          "string_example"
        ],
        "operators": [
          "string_example"
        ],
        "rcoi": [
          "string_example"
        ],
        "venue_name": "some_name"
      },
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "inject_dhcp_option_82": {
        "circuit_id": "{{SSID}}:{{AP_MAC}}",
        "enabled": true
      },
      "interface": "all",
      "isolation": true,
      "l2_isolation": true,
      "legacy_overds": true,
      "limit_bcast": true,
      "limit_probe_response": true,
      "max_idletime": 1800,
      "max_num_clients": 123,
      "mist_nac": {
        "acct_interim_interval": 60,
        "auth_servers_retries": 3,
        "auth_servers_timeout": 5,
        "coa_enabled": true,
        "coa_port": 3799,
        "enabled": true,
        "fast_dot1x_timers": true,
        "network": "default",
        "source_ip": "1.2.3.4"
      },
      "modified_time": 1.23,
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "mxtunnel_id": "string_example",
      "mxtunnel_ids": [
        "08cd7499-5841-51c8-e663-fb16b6f3b45e"
      ],
      "mxtunnel_name": [
        "default"
      ],
      "no_static_dns": true,
      "no_static_ip": true,
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "portal": {
        "allow_wlan_id_roam": true,
        "amazon_client_id": "string_example",
        "amazon_client_secret": "string_example",
        "amazon_email_domains": [
          "string_example"
        ],
        "amazon_enabled": true,
        "amazon_expire": 123,
        "auth": "none",
        "azure_client_id": "string_example",
        "azure_client_secret": "string_example",
        "azure_enabled": true,
        "azure_expire": 123,
        "azure_tenant_id": "string_example",
        "broadnet_password": "password",
        "broadnet_sid": "MIST",
        "broadnet_user_id": "juniper",
        "bypass_when_cloud_down": true,
        "clickatell_api_key": "string_example",
        "cross_site": true,
        "email_enabled": true,
        "enabled": true,
        "expire": 1440,
        "external_portal_url": "string_example",
        "facebook_client_id": "string_example",
        "facebook_client_secret": "string_example",
        "facebook_email_domains": [
          "string_example"
        ],
        "facebook_enabled": true,
        "facebook_expire": 123,
        "forward": true,
        "forward_url": "https://abc.com/promotions",
        "google_client_id": "string_example",
        "google_client_secret": "string_example",
        "google_email_domains": [
          "string_example"
        ],
        "google_enabled": true,
        "google_expire": 123,
        "gupshup_password": "string_example",
        "gupshup_userid": "string_example",
        "microsoft_client_id": "string_example",
        "microsoft_client_secret": "string_example",
        "microsoft_email_domains": [
          "string_example"
        ],
        "microsoft_enabled": true,
        "microsoft_expire": 123,
        "passphrase_enabled": true,
        "passphrase_expire": 123,
        "password": "let me in",
        "predefined_sponsors_enabled": true,
        "predefined_sponsors_hide_email": true,
        "privacy": true,
        "puzzel_password": "string_example",
        "puzzel_service_id": "string_example",
        "puzzel_username": "string_example",
        "smsMessageFormat": "string_example",
        "sms_enabled": true,
        "sms_expire": 123,
        "sms_provider": "twilio",
        "smsglobal_api_key": "string_example",
        "smsglobal_api_secret": "string_example",
        "sponsor_auto_approve": true,
        "sponsor_email_domains": [
          "string_example"
        ],
        "sponsor_enabled": true,
        "sponsor_expire": 123,
        "sponsor_link_validity_duration": null,
        "sponsor_notify_all": true,
        "sponsor_status_notify": true,
        "sponsors": null,
        "sso_default_role": "string_example",
        "sso_forced_role": "string_example",
        "sso_idp_cert": "string_example",
        "sso_idp_sign_algo": "string_example",
        "sso_idp_sso_url": "string_example",
        "sso_issuer": "string_example",
        "sso_nameid_format": "string_example",
        "telstra_client_id": "string_example",
        "telstra_client_secret": "string_example",
        "twilio_auth_token": "af9dac44c344a875ab5d31cb7abcdefg",
        "twilio_phone_number": "+18548888888",
        "twilio_sid": "af9dac44c344a875ab5d31cb7abcdefg"
      },
      "portal_allowed_hostnames": [
        "string_example"
      ],
      "portal_allowed_subnets": [
        "string_example"
      ],
      "portal_api_secret": "EIfPMOykI3lMlDdNPub2WcbqT6dNOtWwmYHAd6bY",
      "portal_denied_hostnames": [
        "string_example"
      ],
      "portal_image": "https://url/to/image.png",
      "portal_sso_url": "string_example",
      "portal_template_url": "string_example",
      "qos": {
        "class": "best_effort",
        "overwrite": true
      },
      "radsec": {
        "coa_enabled": true,
        "enabled": true,
        "idle_timeout": null,
        "mxcluster_ids": [
          "572586b7-f97b-a22b-526c-8b97a3f609c4"
        ],
        "proxy_hosts": [
          "mxedge1.local"
        ],
        "server_name": "radsec.abc.com",
        "servers": [
          {
            "host": "1.1.1.1",
            "port": 1812
          }
        ],
        "use_mxedge": true,
        "use_site_mxedge": true
      },
      "rateset": {},
      "reconnect_clients_when_roaming_mxcluster": true,
      "roam_mode": "NONE",
      "schedule": {
        "enabled": true,
        "hours": {
          "fri": "09:00-17:00",
          "mon": "09:00-17:00",
          "sat": "09:00-17:00",
          "sun": "09:00-17:00",
          "thu": "09:00-17:00",
          "tue": "09:00-17:00",
          "wed": "09:00-17:00"
        }
      },
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sle_excluded": true,
      "ssid": "corporate",
      "template_id": "string_example",
      "thumbnail": "string_example",
      "use_eapol_v1": true,
      "vlan_enabled": true,
      "vlan_id": null,
      "vlan_ids": null,
      "vlan_pooling": true,
      "wlan_limit_down": null,
      "wlan_limit_down_enabled": true,
      "wlan_limit_up": null,
      "wlan_limit_up_enabled": true,
      "wxtag_ids": [
        "string_example"
      ],
      "wxtunnel_id": "string_example",
      "wxtunnel_remote_id": "string_example"
    }
  ]
});
$resp = $client->orgs security policies->updateOrgSecPolicy($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `DELETE /api/v1/orgs/{org_id}/secpolicies/{secpolicy_id}`

**Summary:** deleteOrgSecPolicy

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

