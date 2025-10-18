# Sites Setting API

## `GET /api/v1/sites/{site_id}/setting`

**Summary:** getSiteSetting

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/setting`

**Summary:** updateSiteSettings

**Request (raw array example)**

```json
{
  "acl_policies": [
    {
      "actions": [
        {
          "action": "string_example",
          "dst_tag": "corp"
        }
      ],
      "name": "guest access",
      "src_tags": [
        "macs"
      ]
    }
  ],
  "acl_tags": {},
  "additional_config_cmds": [
    "set snmp community public"
  ],
  "analytic": {
    "enabled": true
  },
  "ap_matching": {
    "enabled": true,
    "rules": [
      {
        "match_model": "AP12",
        "name": "AP12",
        "port_config": {}
      }
    ]
  },
  "ap_port_config": {
    "model_specific": {}
  },
  "ap_updown_threshold": null,
  "auto_placement": {
    "orientation": 45,
    "x": 30,
    "y": 60
  },
  "auto_upgrade": {
    "custom_versions": {},
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "12:00",
    "version": "beta"
  },
  "auto_upgrade_esl": {
    "allow_downgrade": true,
    "custom_versions": {},
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "12:00",
    "version": "2.5.0"
  },
  "auto_upgrade_linecard": true,
  "bgp_neighbor_updown_threshold": null,
  "blacklist_url": "https://papi.s3.amazonaws.com/blacklist/xxx...",
  "ble_config": {
    "beacon_enabled": true,
    "beacon_rate": 3,
    "beacon_rate_mode": "custom",
    "beam_disabled": [
      123
    ],
    "custom_ble_packet_enabled": true,
    "custom_ble_packet_frame": "0x........",
    "custom_ble_packet_freq_msec": 300,
    "eddystone_uid_adv_power": -65,
    "eddystone_uid_beams": "2-4,7",
    "eddystone_uid_enabled": true,
    "eddystone_uid_freq_msec": 200,
    "eddystone_uid_instance": "5c5b35000001",
    "eddystone_uid_namespace": "2818e3868dec25629ede",
    "eddystone_url_adv_power": -65,
    "eddystone_url_beams": "2-4,7",
    "eddystone_url_enabled": true,
    "eddystone_url_freq_msec": 1000,
    "eddystone_url_url": "https://www.abc.com",
    "ibeacon_adv_power": -65,
    "ibeacon_beams": "2-4,7",
    "ibeacon_enabled": true,
    "ibeacon_freq_msec": 123,
    "ibeacon_major": 13,
    "ibeacon_minor": 138,
    "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
    "power": 6,
    "power_mode": "custom"
  },
  "config_auto_revert": true,
  "config_push_policy": {
    "no_push": true,
    "push_window": {
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
    }
  },
  "created_time": 1.23,
  "critical_url_monitoring": {
    "enabled": true,
    "monitors": [
      {
        "url": "http://50.1.3.5:8080",
        "vlan_id": null
      }
    ]
  },
  "default_port_usage": "string_example",
  "device_updown_threshold": null,
  "dhcp_snooping": {
    "all_networks": true,
    "enable_arp_spoof_check": true,
    "enable_ip_source_guard": true,
    "enabled": true,
    "networks": [
      "string_example"
    ]
  },
  "disabled_system_defined_port_usages": [
    "string_example"
  ],
  "dns_servers": [
    "string_example"
  ],
  "dns_suffix": [
    "string_example"
  ],
  "enable_unii_4": true,
  "engagement": {
    "dwell_tag_names": {
      "bounce": "Bounce",
      "engaged": "Engaged",
      "passerby": "Passer By",
      "stationed": "Stationed"
    },
    "dwell_tags": {
      "bounce": "string_example",
      "engaged": "string_example",
      "passerby": "string_example",
      "stationed": "string_example"
    },
    "hours": {
      "fri": "09:00-17:00",
      "mon": "09:00-17:00",
      "sat": "09:00-17:00",
      "sun": "09:00-17:00",
      "thu": "09:00-17:00",
      "tue": "09:00-17:00",
      "wed": "09:00-17:00"
    },
    "max_dwell": 43200,
    "min_dwell": 123
  },
  "evpn_options": {
    "auto_loopback_subnet": "string_example",
    "auto_loopback_subnet6": "string_example",
    "auto_router_id_subnet": "string_example",
    "auto_router_id_subnet6": "fd31:5700:1::/64",
    "core_as_border": true,
    "enable_inband_ztp": true,
    "overlay": {
      "as": 65000
    },
    "per_vlan_vga_v4_mac": true,
    "per_vlan_vga_v6_mac": true,
    "routed_at": "string_example",
    "underlay": {
      "as_base": 65001,
      "routed_id_prefix": "/24",
      "subnet": "10.255.240.0/20",
      "use_ipv6": true
    },
    "vs_instances": {}
  },
  "extra_routes": {},
  "extra_routes6": {},
  "flags": {},
  "for_site": true,
  "gateway": {
    "additional_config_cmds": [
      "set snmp community public"
    ],
    "bgp_config": {},
    "created_time": 1.23,
    "dhcpd_config": {
      "enabled": true
    },
    "dnsOverride": true,
    "dns_servers": [
      "string_example"
    ],
    "dns_suffix": [
      "string_example"
    ],
    "extra_routes": {},
    "extra_routes6": {},
    "gateway_matching": {
      "enable": true,
      "rules": [
        {
          "additional_config_cmds": [
            "set snmp community public"
          ],
          "name": "string_example",
          "port_config": {}
        }
      ]
    },
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "idp_profiles": {},
    "ip_configs": {},
    "modified_time": 1.23,
    "name": "gw_template",
    "networks": [
      {
        "created_time": 1.23,
        "disallow_mist_services": true,
        "gateway": "192.168.70.1",
        "gateway6": "fdad:b0bc:f29e::1",
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "internal_access": {
          "enabled": true
        },
        "internet_access": {
          "create_simple_service_policy": true,
          "destination_nat": {},
          "enabled": true,
          "restricted": true,
          "static_nat": {}
        },
        "isolation": true,
        "modified_time": 1.23,
        "multicast": {
          "disable_igmp": true,
          "enabled": true,
          "groups": {}
        },
        "name": "string_example",
        "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
        "routed_for_networks": [
          "pos"
        ],
        "subnet": "192.168.70.0/24",
        "subnet6": "fdad:b0bc:f29e::/32",
        "tenants": {},
        "vlan_id": null,
        "vpn_access": {}
      }
    ],
    "ntpOverride": true,
    "ntp_servers": [
      "string_example"
    ],
    "oob_ip_config": {
      "gateway": "string_example",
      "ip": "string_example",
      "netmask": "string_example",
      "node1": {
        "gateway": "string_example",
        "ip": "string_example",
        "netmask": "string_example",
        "type": "static",
        "use_mgmt_vrf": true,
        "use_mgmt_vrf_for_host_out": true,
        "vlan_id": "string_example"
      },
      "type": "static",
      "use_mgmt_vrf": true,
      "use_mgmt_vrf_for_host_out": true,
      "vlan_id": "string_example"
    },
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "path_preferences": {},
    "port_config": {},
    "router_id": "10.2.1.10",
    "routing_policies": {},
    "service_policies": [
      {
        "action": "string_example",
        "antivirus": {
          "avprofile_id": "string_example",
          "enabled": true,
          "profile": "string_example"
        },
        "appqoe": {
          "enabled": true
        },
        "ewf": [
          {
            "alert_only": true,
            "block_message": "Access to this URL Category has been blocked",
            "enabled": true,
            "profile": "string_example"
          }
        ],
        "idp": {
          "alert_only": true,
          "enabled": true,
          "idpprofile_id": "89b9d208-84a4-fa8f-af57-78f92c639cf2",
          "profile": "string_example"
        },
        "local_routing": true,
        "name": "string_example",
        "path_preference": "string_example",
        "secintel": {
          "enabled": true,
          "profile": "string_example",
          "secintelprofile_id": "string_example"
        },
        "servicepolicy_id": "string_example",
        "services": [
          "string_example"
        ],
        "ssl_proxy": {
          "ciphers_category": "string_example",
          "enabled": true
        },
        "tenants": [
          "string_example"
        ]
      }
    ],
    "tunnel_configs": {},
    "tunnel_provider_options": {
      "jse": {
        "num_users": 5,
        "org_name": "JSE_ORG1"
      },
      "prisma": {
        "service_account_name": "sa1@1823425211"
      },
      "zscaler": {
        "aup_block_internet_until_accepted": true,
        "aup_enabled": true,
        "aup_force_ssl_inspection": true,
        "aup_timeout_in_days": 123,
        "auth_required": true,
        "caution_enabled": true,
        "dn_bandwidth": 200,
        "idle_time_in_minutes": 123,
        "ofw_enabled": true,
        "sub_locations": [
          {
            "aup_block_internet_until_accepted": true,
            "aup_enabled": true,
            "aup_force_ssl_inspection": true,
            "aup_timeout_in_days": 123,
            "auth_required": true,
            "caution_enabled": true,
            "dn_bandwidth": 200,
            "idle_time_in_minutes": 123,
            "name": "string_example",
            "ofw_enabled": true,
            "surrogate_IP": true,
            "surrogate_IP_enforced_for_known_browsers": true,
            "surrogate_refresh_time_in_minutes": 123,
            "up_bandwidth": 200
          }
        ],
        "surrogate_IP": true,
        "surrogate_IP_enforced_for_known_browsers": true,
        "surrogate_refresh_time_in_minutes": 123,
        "up_bandwidth": 200,
        "xff_forward_enabled": true
      }
    },
    "type": "standalone",
    "url_filtering_deny_msg": "Access to this URL Category has been blocked",
    "vrf_config": {
      "enabled": true
    },
    "vrf_instances": {}
  },
  "gateway_additional_config_cmds": [
    "set snmp community public"
  ],
  "gateway_mgmt": {
    "admin_sshkeys": [
      "string_example"
    ],
    "app_probing": {
      "apps": [
        "string_example"
      ],
      "custom_apps": [
        {
          "address": "192.168.1.1",
          "app_type": "string_example",
          "hostnames": [
            "string_example"
          ],
          "key": "string_example",
          "name": "pos_app",
          "network": "lan",
          "packetSize": 123,
          "protocol": "string_example",
          "url": "www.abc.com",
          "vrf": "lan"
        }
      ],
      "enabled": true
    },
    "app_usage": true,
    "auto_signature_update": {
      "day_of_week": "string_example",
      "enable": true,
      "time_of_day": "string_example"
    },
    "config_revert_timer": 123,
    "disable_console": true,
    "disable_oob": true,
    "disable_usb": true,
    "fips_enabled": true,
    "probe_hosts": [
      "string_example"
    ],
    "probe_hostsv6": [
      "string_example"
    ],
    "protect_re": {
      "allowed_services": [
        "string_example"
      ],
      "custom": [
        {
          "port_range": "80,1035-1040",
          "protocol": "string_example",
          "subnets": [
            "10.1.2.0/24"
          ]
        }
      ],
      "enabled": true,
      "hit_count": true,
      "trusted_hosts": [
        "10.242.3.0/24"
      ]
    },
    "root_password": "string_example",
    "security_log_source_address": "192.168.1.1",
    "security_log_source_interface": "ge-0/0/1.0"
  },
  "gateway_updown_threshold": null,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "juniper_srx": {
    "gateways": [
      {
        "api_key": "5abf7c8a-1a1c-4398-ba2d-b0c297094d1a",
        "api_password": "abc@123",
        "api_url": "https://23.43.12.78:8443"
      }
    ],
    "send_mist_nac_user_info": true
  },
  "led": {
    "brightness": 255,
    "enabled": true
  },
  "marvis": {
    "auto_operations": {
      "bounce_port_for_abnormal_poe_client": true,
      "disable_port_when_ddos_protocol_violation": true,
      "disable_port_when_rogue_dhcp_server_detected": true
    }
  },
  "mist_nac": {
    "enabled": true,
    "network": "string_example"
  },
  "modified_time": 1.23,
  "mxedge": {
    "mist_das": {
      "coa_servers": [
        {
          "disable_event_timestamp_check": true,
          "enabled": true,
          "host": "string_example",
          "port": 123,
          "require_message_authenticator": true,
          "secret": "string_example"
        }
      ],
      "enabled": true
    },
    "mist_nac": {
      "acct_server_port": 123,
      "auth_server_port": 123,
      "client_ips": {},
      "enabled": true,
      "secret": "testing123"
    },
    "mist_nacedge": {
      "auth_ttl": 123,
      "default_dot1x_vlan": "20",
      "default_vlan": "test_vlan",
      "enabled": true,
      "mxedge_hosts": [
        "string_example"
      ]
    },
    "radsec": {
      "acct_servers": [
        {
          "host": "string_example",
          "port": 123,
          "secret": "string_example",
          "ssids": [
            "string_example"
          ]
        }
      ],
      "auth_servers": [
        {
          "host": "string_example",
          "inband_status_check": true,
          "inband_status_interval": 123,
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "string_example",
          "keywrap_mack": "string_example",
          "port": 123,
          "retry": 123,
          "secret": "string_example",
          "ssids": [
            "string_example"
          ],
          "timeout": 123
        }
      ],
      "enabled": true,
      "match_ssid": true,
      "nas_ip_source": "string_example",
      "proxy_hosts": [
        "string_example"
      ],
      "server_selection": "string_example",
      "src_ip_source": "string_example"
    }
  },
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "mxtunnels": {
    "additional_mxtunnels": {},
    "ap_subnets": [
      "0.0.0.0/0"
    ],
    "auto_preemption": {
      "day_of_week": "string_example",
      "enabled": true,
      "time_of_day": "12:00"
    },
    "clusters": [
      {
        "name": "primary",
        "tunterm_hosts": [
          "string_example"
        ]
      }
    ],
    "created_time": 1.23,
    "enabled": true,
    "for_site": true,
    "hello_interval": 60,
    "hello_retries": 3,
    "hosts": [
      "string_example"
    ],
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "modified_time": 1.23,
    "mtu": 1100,
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "protocol": "string_example",
    "radsec": {
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
      "enabled": true,
      "use_mxedge": true
    },
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "vlan_ids": [
      123
    ]
  },
  "networks": {},
  "ntp_servers": [
    "string_example"
  ],
  "occupancy": {
    "assets_enabled": true,
    "clients_enabled": true,
    "min_duration": 3000,
    "sdkclients_enabled": true,
    "unconnected_clients_enabled": true
  },
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "ospf_areas": {},
  "paloalto_networks": {
    "gateways": [
      {
        "api_key": "5abf7c8a-1a1c-4398-ba2d-b0c297094d1a",
        "api_url": "https://23.43.12.78:8443"
      }
    ],
    "send_mist_nac_user_info": true
  },
  "persist_config_on_device": true,
  "port_mirroring": {},
  "port_usages": {},
  "proxy": {
    "url": "https://proxy.corp.com:8080/"
  },
  "radio_config": {
    "allow_rrm_disable": true,
    "ant_gain_24": 4,
    "ant_gain_5": 5,
    "ant_gain_6": 5,
    "ant_mode": "external",
    "antenna_mode": "string_example",
    "band_24": {
      "allow_rrm_disable": true,
      "ant_gain": 123,
      "antenna_mode": "default",
      "bandwidth": 20,
      "channel": 6,
      "channels": [
        123
      ],
      "disabled": true,
      "power": 3,
      "power_max": 123,
      "power_min": 123,
      "preamble": "string_example"
    },
    "band_24_usage": "string_example",
    "band_5": {
      "allow_rrm_disable": true,
      "ant_gain": 123,
      "antenna_mode": "default",
      "bandwidth": 40,
      "channel": 100,
      "channels": [
        123
      ],
      "disabled": true,
      "power": 6,
      "power_max": 123,
      "power_min": 123,
      "preamble": "string_example"
    },
    "band_5_on_24_radio": {
      "allow_rrm_disable": true,
      "ant_gain": 123,
      "antenna_mode": "default",
      "bandwidth": 40,
      "channel": 100,
      "channels": [
        123
      ],
      "disabled": true,
      "power": 6,
      "power_max": 123,
      "power_min": 123,
      "preamble": "string_example"
    },
    "band_6": {
      "allow_rrm_disable": true,
      "ant_gain": 123,
      "antenna_mode": "default",
      "bandwidth": 80,
      "channel": 0,
      "channels": [
        123
      ],
      "disabled": true,
      "power": 7,
      "power_max": 123,
      "power_min": 123,
      "preamble": "string_example",
      "standard_power": true
    },
    "full_automatic_rrm": true,
    "indoor_use": true,
    "scanning_enabled": true
  },
  "radius_config": {
    "acct_immediate_update": true,
    "acct_interim_interval": 123,
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
    "auth_server_selection": "string_example",
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
    "auth_servers_retries": 123,
    "auth_servers_timeout": 123,
    "coa_enabled": true,
    "coa_port": null,
    "fast_dot1x_timers": true,
    "network": "string_example",
    "source_ip": "string_example"
  },
  "remote_syslog": {
    "archive": {
      "files": null,
      "size": "5m"
    },
    "cacerts": [
      "string_example"
    ],
    "console": {
      "contents": [
        {
          "facility": "config",
          "severity": "string_example"
        }
      ]
    },
    "enabled": true,
    "files": [
      {
        "archive": {
          "files": null,
          "size": "5m"
        },
        "contents": [
          {
            "facility": "config",
            "severity": "string_example"
          }
        ],
        "enable_tls": true,
        "explicit_priority": true,
        "file": "file-name",
        "match": "!alarm|ntp|errors.crc_error[chan]",
        "structured_data": true
      }
    ],
    "network": "default",
    "send_to_all_servers": true,
    "servers": [
      {
        "contents": [
          {
            "facility": "config",
            "severity": "string_example"
          }
        ],
        "explicit_priority": true,
        "facility": "config",
        "host": "syslogd.internal",
        "match": "!alarm|ntp|errors.crc_error[chan]",
        "port": null,
        "protocol": "string_example",
        "routing_instance": "routing-instance-name",
        "server_name": "syslogd.internal",
        "severity": "string_example",
        "source_address": "string_example",
        "structured_data": true,
        "tag": "string_example"
      }
    ],
    "time_format": "millisecond",
    "users": [
      {
        "contents": [
          {
            "facility": "config",
            "severity": "string_example"
          }
        ],
        "match": "\"!alarm|ntp|errors.crc_error[chan]\"",
        "user": "*"
      }
    ]
  },
  "remove_existing_configs": true,
  "report_gatt": true,
  "rogue": {
    "allowed_vlan_ids": [
      123
    ],
    "enabled": true,
    "honeypot_enabled": true,
    "min_duration": 10,
    "min_rogue_duration": 10,
    "min_rogue_rssi": -80,
    "min_rssi": -80,
    "whitelisted_bssids": [
      "string_example"
    ],
    "whitelisted_ssids": [
      "string_example"
    ]
  },
  "rtsa": {
    "app_waking": true,
    "disable_dead_reckoning": true,
    "disable_pressure_sensor": true,
    "enabled": true,
    "track_asset": true
  },
  "simple_alert": {
    "arp_failure": {
      "client_count": 123,
      "duration": 123,
      "incident_count": 123
    },
    "dhcp_failure": {
      "client_count": 123,
      "duration": 123,
      "incident_count": 123
    },
    "dns_failure": {
      "client_count": 123,
      "duration": 123,
      "incident_count": 123
    }
  },
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "skyatp": {
    "enabled": true,
    "send_ip_mac_mapping": true
  },
  "sle_thresholds": {
    "capacity": 123,
    "coverage": 123,
    "throughput": 123,
    "time-to-connect": 123
  },
  "snmp_config": {
    "client_list": [
      {
        "client_list_name": "clist-1",
        "clients": [
          "151.140.101.218/32"
        ]
      }
    ],
    "contact": "cns@juniper.net",
    "description": "Juniper QFX Series Switch - 1K_5LA",
    "enabled": true,
    "engine_id": "string_example",
    "engine_id_type": "string_example",
    "location": "Las Vegas, NV",
    "name": "TGH-1K-QFX10K",
    "network": "string_example",
    "trap_groups": [
      {
        "categories": [
          "authentication"
        ],
        "group_name": "profiler",
        "targets": [
          "172.29.158.19"
        ],
        "version": "string_example"
      }
    ],
    "v2c_config": [
      {
        "authorization": "read-only",
        "client_list_name": "clist-1",
        "community_name": "abc123",
        "view": "all"
      }
    ],
    "v3_config": {
      "notify": [
        {
          "name": "string_example",
          "tag": "string_example",
          "type": "string_example"
        }
      ],
      "notify_filter": [
        {
          "contents": [
            {
              "include": true,
              "oid": "1.3.6.1.4.1"
            }
          ],
          "profile_name": "string_example"
        }
      ],
      "target_address": [
        {
          "address": "10.11.0.2",
          "address_mask": "255.255.255.0",
          "port": "string_example",
          "tag_list": "string_example",
          "target_address_name": "target_address_name",
          "target_parameters": "string_example"
        }
      ],
      "target_parameters": [
        {
          "message_processing_model": "string_example",
          "name": "string_example",
          "notify_filter": "string_example",
          "security_level": "string_example",
          "security_model": "string_example",
          "security_name": "m01620"
        }
      ],
      "usm": [
        {
          "engine_type": "string_example",
          "remote_engine_id": "00:00:00:0b:00:00:70:10:6f:08:b6:3f",
          "users": [
            {
              "authentication_password": "string_example",
              "authentication_type": "string_example",
              "encryption_password": "string_example",
              "encryption_type": "string_example",
              "name": "string_example"
            }
          ]
        }
      ],
      "vacm": {
        "access": [
          {
            "group_name": "string_example",
            "prefix_list": [
              {
                "context_prefix": "iil",
                "notify_view": "all",
                "read_view": "all",
                "security_level": "string_example",
                "security_model": "string_example",
                "type": "string_example",
                "write_view": "all"
              }
            ]
          }
        ],
        "security_to_group": {
          "content": [
            {
              "group": "string_example",
              "security_name": "string_example"
            }
          ],
          "security_model": "string_example"
        }
      }
    },
    "views": [
      {
        "include": true,
        "oid": "1.3.6.1",
        "view_name": "all"
      }
    ]
  },
  "srx_app": {
    "enabled": true
  },
  "ssh_keys": [
    "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAA...Wxa6p6UW0ZbcP john@host"
  ],
  "ssr": {
    "auto_upgrade": {
      "channel": "string_example",
      "custom_versions": {},
      "enabled": true
    },
    "conductor_hosts": [
      "string_example"
    ],
    "conductor_token": "string_example",
    "disable_stats": true,
    "proxy": {
      "url": "https://proxy.corp.com:8080/"
    }
  },
  "status_portal": {
    "enabled": true,
    "hostnames": [
      "my.misty.com"
    ]
  },
  "switch": null,
  "switch_matching": {
    "enable": true,
    "rules": [
      {
        "additional_config_cmds": [
          "set snmp community public"
        ],
        "ip_config": {
          "network": "string_example",
          "type": "static"
        },
        "name": "string_example",
        "oob_ip_config": {
          "type": "static",
          "use_mgmt_vrf": true,
          "use_mgmt_vrf_for_host_out": true
        },
        "port_config": {},
        "port_mirroring": {},
        "stp_config": {
          "bridge_priority": "40k"
        },
        "switch_mgmt": {
          "ap_affinity_threshold": 123,
          "cli_banner": "\\t\\tWELCOME!",
          "cli_idle_timeout": 123,
          "config_revert_timer": 123,
          "dhcp_option_fqdn": true,
          "disable_oob_down_alarm": true,
          "fips_enabled": true,
          "local_accounts": {},
          "mxedge_proxy_host": "string_example",
          "mxedge_proxy_port": null,
          "protect_re": {
            "allowed_services": [
              "string_example"
            ],
            "custom": [
              {
                "port_range": "80,1035-1040",
                "protocol": "string_example",
                "subnets": [
                  "10.1.2.0/24"
                ]
              }
            ],
            "enabled": true,
            "hit_count": true,
            "trusted_hosts": [
              "10.242.3.0/24"
            ]
          },
          "radius": {
            "enabled": true,
            "radius_config": {
              "acct_immediate_update": true,
              "acct_interim_interval": 123,
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
              "auth_server_selection": "string_example",
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
              "auth_servers_retries": 123,
              "auth_servers_timeout": 123,
              "coa_enabled": true,
              "coa_port": null,
              "fast_dot1x_timers": true,
              "network": "string_example",
              "source_ip": "string_example"
            },
            "use_different_radius": "string_example"
          },
          "remove_existing_configs": true,
          "root_password": "string_example",
          "tacacs": {
            "acct_servers": [
              {
                "host": "string_example",
                "port": "string_example",
                "secret": "string_example",
                "timeout": 123
              }
            ],
            "default_role": "string_example",
            "enabled": true,
            "network": "string_example",
            "tacplus_servers": [
              {
                "host": "string_example",
                "port": "string_example",
                "secret": "string_example",
                "timeout": 123
              }
            ]
          },
          "use_mxedge_proxy": true
        }
      }
    ]
  },
  "switch_mgmt": {
    "ap_affinity_threshold": 123,
    "cli_banner": "\\t\\tWELCOME!",
    "cli_idle_timeout": 123,
    "config_revert_timer": 123,
    "dhcp_option_fqdn": true,
    "disable_oob_down_alarm": true,
    "fips_enabled": true,
    "local_accounts": {},
    "mxedge_proxy_host": "string_example",
    "mxedge_proxy_port": null,
    "protect_re": {
      "allowed_services": [
        "string_example"
      ],
      "custom": [
        {
          "port_range": "80,1035-1040",
          "protocol": "string_example",
          "subnets": [
            "10.1.2.0/24"
          ]
        }
      ],
      "enabled": true,
      "hit_count": true,
      "trusted_hosts": [
        "10.242.3.0/24"
      ]
    },
    "radius": {
      "enabled": true,
      "radius_config": {
        "acct_immediate_update": true,
        "acct_interim_interval": 123,
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
        "auth_server_selection": "string_example",
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
        "auth_servers_retries": 123,
        "auth_servers_timeout": 123,
        "coa_enabled": true,
        "coa_port": null,
        "fast_dot1x_timers": true,
        "network": "string_example",
        "source_ip": "string_example"
      },
      "use_different_radius": "string_example"
    },
    "remove_existing_configs": true,
    "root_password": "string_example",
    "tacacs": {
      "acct_servers": [
        {
          "host": "string_example",
          "port": "string_example",
          "secret": "string_example",
          "timeout": 123
        }
      ],
      "default_role": "string_example",
      "enabled": true,
      "network": "string_example",
      "tacplus_servers": [
        {
          "host": "string_example",
          "port": "string_example",
          "secret": "string_example",
          "timeout": 123
        }
      ]
    },
    "use_mxedge_proxy": true
  },
  "switch_updown_threshold": null,
  "synthetic_test": {
    "aggressiveness": "string_example",
    "custom_probes": {},
    "disabled": true,
    "lan_networks": [
      {
        "networks": [
          "string_example"
        ],
        "probes": [
          "string_example"
        ]
      }
    ],
    "vlans": [
      {
        "custom_test_urls": [
          "string_example"
        ],
        "disabled": true,
        "probes": [
          "string_example"
        ],
        "vlan_ids": [
          null
        ]
      }
    ],
    "wan_speedtest": {
      "enabled": true,
      "time_of_day": "12:00"
    }
  },
  "track_anonymous_devices": true,
  "tunterm_monitoring": [
    {
      "host": "10.2.8.15",
      "port": 80,
      "protocol": "tcp",
      "src_vlan_id": 5,
      "timeout": 300
    }
  ],
  "tunterm_monitoring_disabled": true,
  "tunterm_multicast_config": {
    "mdns": {
      "enabled": true,
      "vlan_ids": [
        123
      ]
    },
    "multicast_all": true,
    "ssdp": {
      "enabled": true,
      "vlan_ids": [
        123
      ]
    }
  },
  "uplink_port_config": {
    "dot1x": true,
    "keep_wlans_up_if_down": true
  },
  "vars": {},
  "vna": {
    "enabled": true
  },
  "vpn_path_updown_threshold": null,
  "vpn_peer_updown_threshold": null,
  "vrf_config": {
    "enabled": true
  },
  "vrf_instances": {},
  "vrrp_groups": {},
  "vs_instance": {},
  "wan_vna": {
    "enabled": true
  },
  "watched_station_url": "https://papi.s3.amazonaws.com/watched_station/xxx...",
  "whitelist_url": "https://papi.s3.amazonaws.com/whitelist/xxx...",
  "wids": {
    "repeated_auth_failures": {
      "duration": 60,
      "threshold": 123
    }
  },
  "wifi": {
    "cisco_enabled": true,
    "disable_11k": true,
    "disable_radios_when_power_constrained": true,
    "enable_arp_spoof_check": true,
    "enable_shared_radio_scanning": true,
    "enabled": true,
    "locate_connected": true,
    "locate_unconnected": true,
    "mesh_allow_dfs": true,
    "mesh_enable_crm": true,
    "mesh_enabled": true,
    "mesh_psk": "string_example",
    "mesh_ssid": "string_example",
    "proxy_arp": "string_example"
  },
  "wired_vna": {
    "enabled": true
  },
  "zone_occupancy_alert": {
    "email_notifiers": [
      "string_example"
    ],
    "enabled": true,
    "threshold": 5
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SiteSetting;

$model = new SiteSetting({
  "acl_policies": [
    {
      "actions": [
        {
          "action": "string_example",
          "dst_tag": "corp"
        }
      ],
      "name": "guest access",
      "src_tags": [
        "macs"
      ]
    }
  ],
  "acl_tags": {},
  "additional_config_cmds": [
    "set snmp community public"
  ],
  "analytic": {
    "enabled": true
  },
  "ap_matching": {
    "enabled": true,
    "rules": [
      {
        "match_model": "AP12",
        "name": "AP12",
        "port_config": {}
      }
    ]
  },
  "ap_port_config": {
    "model_specific": {}
  },
  "ap_updown_threshold": null,
  "auto_placement": {
    "orientation": 45,
    "x": 30,
    "y": 60
  },
  "auto_upgrade": {
    "custom_versions": {},
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "12:00",
    "version": "beta"
  },
  "auto_upgrade_esl": {
    "allow_downgrade": true,
    "custom_versions": {},
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "12:00",
    "version": "2.5.0"
  },
  "auto_upgrade_linecard": true,
  "bgp_neighbor_updown_threshold": null,
  "blacklist_url": "https://papi.s3.amazonaws.com/blacklist/xxx...",
  "ble_config": {
    "beacon_enabled": true,
    "beacon_rate": 3,
    "beacon_rate_mode": "custom",
    "beam_disabled": [
      123
    ],
    "custom_ble_packet_enabled": true,
    "custom_ble_packet_frame": "0x........",
    "custom_ble_packet_freq_msec": 300,
    "eddystone_uid_adv_power": -65,
    "eddystone_uid_beams": "2-4,7",
    "eddystone_uid_enabled": true,
    "eddystone_uid_freq_msec": 200,
    "eddystone_uid_instance": "5c5b35000001",
    "eddystone_uid_namespace": "2818e3868dec25629ede",
    "eddystone_url_adv_power": -65,
    "eddystone_url_beams": "2-4,7",
    "eddystone_url_enabled": true,
    "eddystone_url_freq_msec": 1000,
    "eddystone_url_url": "https://www.abc.com",
    "ibeacon_adv_power": -65,
    "ibeacon_beams": "2-4,7",
    "ibeacon_enabled": true,
    "ibeacon_freq_msec": 123,
    "ibeacon_major": 13,
    "ibeacon_minor": 138,
    "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
    "power": 6,
    "power_mode": "custom"
  },
  "config_auto_revert": true,
  "config_push_policy": {
    "no_push": true,
    "push_window": {
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
    }
  },
  "created_time": 1.23,
  "critical_url_monitoring": {
    "enabled": true,
    "monitors": [
      {
        "url": "http://50.1.3.5:8080",
        "vlan_id": null
      }
    ]
  },
  "default_port_usage": "string_example",
  "device_updown_threshold": null,
  "dhcp_snooping": {
    "all_networks": true,
    "enable_arp_spoof_check": true,
    "enable_ip_source_guard": true,
    "enabled": true,
    "networks": [
      "string_example"
    ]
  },
  "disabled_system_defined_port_usages": [
    "string_example"
  ],
  "dns_servers": [
    "string_example"
  ],
  "dns_suffix": [
    "string_example"
  ],
  "enable_unii_4": true,
  "engagement": {
    "dwell_tag_names": {
      "bounce": "Bounce",
      "engaged": "Engaged",
      "passerby": "Passer By",
      "stationed": "Stationed"
    },
    "dwell_tags": {
      "bounce": "string_example",
      "engaged": "string_example",
      "passerby": "string_example",
      "stationed": "string_example"
    },
    "hours": {
      "fri": "09:00-17:00",
      "mon": "09:00-17:00",
      "sat": "09:00-17:00",
      "sun": "09:00-17:00",
      "thu": "09:00-17:00",
      "tue": "09:00-17:00",
      "wed": "09:00-17:00"
    },
    "max_dwell": 43200,
    "min_dwell": 123
  },
  "evpn_options": {
    "auto_loopback_subnet": "string_example",
    "auto_loopback_subnet6": "string_example",
    "auto_router_id_subnet": "string_example",
    "auto_router_id_subnet6": "fd31:5700:1::/64",
    "core_as_border": true,
    "enable_inband_ztp": true,
    "overlay": {
      "as": 65000
    },
    "per_vlan_vga_v4_mac": true,
    "per_vlan_vga_v6_mac": true,
    "routed_at": "string_example",
    "underlay": {
      "as_base": 65001,
      "routed_id_prefix": "/24",
      "subnet": "10.255.240.0/20",
      "use_ipv6": true
    },
    "vs_instances": {}
  },
  "extra_routes": {},
  "extra_routes6": {},
  "flags": {},
  "for_site": true,
  "gateway": {
    "additional_config_cmds": [
      "set snmp community public"
    ],
    "bgp_config": {},
    "created_time": 1.23,
    "dhcpd_config": {
      "enabled": true
    },
    "dnsOverride": true,
    "dns_servers": [
      "string_example"
    ],
    "dns_suffix": [
      "string_example"
    ],
    "extra_routes": {},
    "extra_routes6": {},
    "gateway_matching": {
      "enable": true,
      "rules": [
        {
          "additional_config_cmds": [
            "set snmp community public"
          ],
          "name": "string_example",
          "port_config": {}
        }
      ]
    },
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "idp_profiles": {},
    "ip_configs": {},
    "modified_time": 1.23,
    "name": "gw_template",
    "networks": [
      {
        "created_time": 1.23,
        "disallow_mist_services": true,
        "gateway": "192.168.70.1",
        "gateway6": "fdad:b0bc:f29e::1",
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "internal_access": {
          "enabled": true
        },
        "internet_access": {
          "create_simple_service_policy": true,
          "destination_nat": {},
          "enabled": true,
          "restricted": true,
          "static_nat": {}
        },
        "isolation": true,
        "modified_time": 1.23,
        "multicast": {
          "disable_igmp": true,
          "enabled": true,
          "groups": {}
        },
        "name": "string_example",
        "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
        "routed_for_networks": [
          "pos"
        ],
        "subnet": "192.168.70.0/24",
        "subnet6": "fdad:b0bc:f29e::/32",
        "tenants": {},
        "vlan_id": null,
        "vpn_access": {}
      }
    ],
    "ntpOverride": true,
    "ntp_servers": [
      "string_example"
    ],
    "oob_ip_config": {
      "gateway": "string_example",
      "ip": "string_example",
      "netmask": "string_example",
      "node1": {
        "gateway": "string_example",
        "ip": "string_example",
        "netmask": "string_example",
        "type": "static",
        "use_mgmt_vrf": true,
        "use_mgmt_vrf_for_host_out": true,
        "vlan_id": "string_example"
      },
      "type": "static",
      "use_mgmt_vrf": true,
      "use_mgmt_vrf_for_host_out": true,
      "vlan_id": "string_example"
    },
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "path_preferences": {},
    "port_config": {},
    "router_id": "10.2.1.10",
    "routing_policies": {},
    "service_policies": [
      {
        "action": "string_example",
        "antivirus": {
          "avprofile_id": "string_example",
          "enabled": true,
          "profile": "string_example"
        },
        "appqoe": {
          "enabled": true
        },
        "ewf": [
          {
            "alert_only": true,
            "block_message": "Access to this URL Category has been blocked",
            "enabled": true,
            "profile": "string_example"
          }
        ],
        "idp": {
          "alert_only": true,
          "enabled": true,
          "idpprofile_id": "89b9d208-84a4-fa8f-af57-78f92c639cf2",
          "profile": "string_example"
        },
        "local_routing": true,
        "name": "string_example",
        "path_preference": "string_example",
        "secintel": {
          "enabled": true,
          "profile": "string_example",
          "secintelprofile_id": "string_example"
        },
        "servicepolicy_id": "string_example",
        "services": [
          "string_example"
        ],
        "ssl_proxy": {
          "ciphers_category": "string_example",
          "enabled": true
        },
        "tenants": [
          "string_example"
        ]
      }
    ],
    "tunnel_configs": {},
    "tunnel_provider_options": {
      "jse": {
        "num_users": 5,
        "org_name": "JSE_ORG1"
      },
      "prisma": {
        "service_account_name": "sa1@1823425211"
      },
      "zscaler": {
        "aup_block_internet_until_accepted": true,
        "aup_enabled": true,
        "aup_force_ssl_inspection": true,
        "aup_timeout_in_days": 123,
        "auth_required": true,
        "caution_enabled": true,
        "dn_bandwidth": 200,
        "idle_time_in_minutes": 123,
        "ofw_enabled": true,
        "sub_locations": [
          {
            "aup_block_internet_until_accepted": true,
            "aup_enabled": true,
            "aup_force_ssl_inspection": true,
            "aup_timeout_in_days": 123,
            "auth_required": true,
            "caution_enabled": true,
            "dn_bandwidth": 200,
            "idle_time_in_minutes": 123,
            "name": "string_example",
            "ofw_enabled": true,
            "surrogate_IP": true,
            "surrogate_IP_enforced_for_known_browsers": true,
            "surrogate_refresh_time_in_minutes": 123,
            "up_bandwidth": 200
          }
        ],
        "surrogate_IP": true,
        "surrogate_IP_enforced_for_known_browsers": true,
        "surrogate_refresh_time_in_minutes": 123,
        "up_bandwidth": 200,
        "xff_forward_enabled": true
      }
    },
    "type": "standalone",
    "url_filtering_deny_msg": "Access to this URL Category has been blocked",
    "vrf_config": {
      "enabled": true
    },
    "vrf_instances": {}
  },
  "gateway_additional_config_cmds": [
    "set snmp community public"
  ],
  "gateway_mgmt": {
    "admin_sshkeys": [
      "string_example"
    ],
    "app_probing": {
      "apps": [
        "string_example"
      ],
      "custom_apps": [
        {
          "address": "192.168.1.1",
          "app_type": "string_example",
          "hostnames": [
            "string_example"
          ],
          "key": "string_example",
          "name": "pos_app",
          "network": "lan",
          "packetSize": 123,
          "protocol": "string_example",
          "url": "www.abc.com",
          "vrf": "lan"
        }
      ],
      "enabled": true
    },
    "app_usage": true,
    "auto_signature_update": {
      "day_of_week": "string_example",
      "enable": true,
      "time_of_day": "string_example"
    },
    "config_revert_timer": 123,
    "disable_console": true,
    "disable_oob": true,
    "disable_usb": true,
    "fips_enabled": true,
    "probe_hosts": [
      "string_example"
    ],
    "probe_hostsv6": [
      "string_example"
    ],
    "protect_re": {
      "allowed_services": [
        "string_example"
      ],
      "custom": [
        {
          "port_range": "80,1035-1040",
          "protocol": "string_example",
          "subnets": [
            "10.1.2.0/24"
          ]
        }
      ],
      "enabled": true,
      "hit_count": true,
      "trusted_hosts": [
        "10.242.3.0/24"
      ]
    },
    "root_password": "string_example",
    "security_log_source_address": "192.168.1.1",
    "security_log_source_interface": "ge-0/0/1.0"
  },
  "gateway_updown_threshold": null,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "juniper_srx": {
    "gateways": [
      {
        "api_key": "5abf7c8a-1a1c-4398-ba2d-b0c297094d1a",
        "api_password": "abc@123",
        "api_url": "https://23.43.12.78:8443"
      }
    ],
    "send_mist_nac_user_info": true
  },
  "led": {
    "brightness": 255,
    "enabled": true
  },
  "marvis": {
    "auto_operations": {
      "bounce_port_for_abnormal_poe_client": true,
      "disable_port_when_ddos_protocol_violation": true,
      "disable_port_when_rogue_dhcp_server_detected": true
    }
  },
  "mist_nac": {
    "enabled": true,
    "network": "string_example"
  },
  "modified_time": 1.23,
  "mxedge": {
    "mist_das": {
      "coa_servers": [
        {
          "disable_event_timestamp_check": true,
          "enabled": true,
          "host": "string_example",
          "port": 123,
          "require_message_authenticator": true,
          "secret": "string_example"
        }
      ],
      "enabled": true
    },
    "mist_nac": {
      "acct_server_port": 123,
      "auth_server_port": 123,
      "client_ips": {},
      "enabled": true,
      "secret": "testing123"
    },
    "mist_nacedge": {
      "auth_ttl": 123,
      "default_dot1x_vlan": "20",
      "default_vlan": "test_vlan",
      "enabled": true,
      "mxedge_hosts": [
        "string_example"
      ]
    },
    "radsec": {
      "acct_servers": [
        {
          "host": "string_example",
          "port": 123,
          "secret": "string_example",
          "ssids": [
            "string_example"
          ]
        }
      ],
      "auth_servers": [
        {
          "host": "string_example",
          "inband_status_check": true,
          "inband_status_interval": 123,
          "keywrap_enabled": true,
          "keywrap_format": "string_example",
          "keywrap_kek": "string_example",
          "keywrap_mack": "string_example",
          "port": 123,
          "retry": 123,
          "secret": "string_example",
          "ssids": [
            "string_example"
          ],
          "timeout": 123
        }
      ],
      "enabled": true,
      "match_ssid": true,
      "nas_ip_source": "string_example",
      "proxy_hosts": [
        "string_example"
      ],
      "server_selection": "string_example",
      "src_ip_source": "string_example"
    }
  },
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "mxtunnels": {
    "additional_mxtunnels": {},
    "ap_subnets": [
      "0.0.0.0/0"
    ],
    "auto_preemption": {
      "day_of_week": "string_example",
      "enabled": true,
      "time_of_day": "12:00"
    },
    "clusters": [
      {
        "name": "primary",
        "tunterm_hosts": [
          "string_example"
        ]
      }
    ],
    "created_time": 1.23,
    "enabled": true,
    "for_site": true,
    "hello_interval": 60,
    "hello_retries": 3,
    "hosts": [
      "string_example"
    ],
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "modified_time": 1.23,
    "mtu": 1100,
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "protocol": "string_example",
    "radsec": {
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
      "enabled": true,
      "use_mxedge": true
    },
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "vlan_ids": [
      123
    ]
  },
  "networks": {},
  "ntp_servers": [
    "string_example"
  ],
  "occupancy": {
    "assets_enabled": true,
    "clients_enabled": true,
    "min_duration": 3000,
    "sdkclients_enabled": true,
    "unconnected_clients_enabled": true
  },
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "ospf_areas": {},
  "paloalto_networks": {
    "gateways": [
      {
        "api_key": "5abf7c8a-1a1c-4398-ba2d-b0c297094d1a",
        "api_url": "https://23.43.12.78:8443"
      }
    ],
    "send_mist_nac_user_info": true
  },
  "persist_config_on_device": true,
  "port_mirroring": {},
  "port_usages": {},
  "proxy": {
    "url": "https://proxy.corp.com:8080/"
  },
  "radio_config": {
    "allow_rrm_disable": true,
    "ant_gain_24": 4,
    "ant_gain_5": 5,
    "ant_gain_6": 5,
    "ant_mode": "external",
    "antenna_mode": "string_example",
    "band_24": {
      "allow_rrm_disable": true,
      "ant_gain": 123,
      "antenna_mode": "default",
      "bandwidth": 20,
      "channel": 6,
      "channels": [
        123
      ],
      "disabled": true,
      "power": 3,
      "power_max": 123,
      "power_min": 123,
      "preamble": "string_example"
    },
    "band_24_usage": "string_example",
    "band_5": {
      "allow_rrm_disable": true,
      "ant_gain": 123,
      "antenna_mode": "default",
      "bandwidth": 40,
      "channel": 100,
      "channels": [
        123
      ],
      "disabled": true,
      "power": 6,
      "power_max": 123,
      "power_min": 123,
      "preamble": "string_example"
    },
    "band_5_on_24_radio": {
      "allow_rrm_disable": true,
      "ant_gain": 123,
      "antenna_mode": "default",
      "bandwidth": 40,
      "channel": 100,
      "channels": [
        123
      ],
      "disabled": true,
      "power": 6,
      "power_max": 123,
      "power_min": 123,
      "preamble": "string_example"
    },
    "band_6": {
      "allow_rrm_disable": true,
      "ant_gain": 123,
      "antenna_mode": "default",
      "bandwidth": 80,
      "channel": 0,
      "channels": [
        123
      ],
      "disabled": true,
      "power": 7,
      "power_max": 123,
      "power_min": 123,
      "preamble": "string_example",
      "standard_power": true
    },
    "full_automatic_rrm": true,
    "indoor_use": true,
    "scanning_enabled": true
  },
  "radius_config": {
    "acct_immediate_update": true,
    "acct_interim_interval": 123,
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
    "auth_server_selection": "string_example",
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
    "auth_servers_retries": 123,
    "auth_servers_timeout": 123,
    "coa_enabled": true,
    "coa_port": null,
    "fast_dot1x_timers": true,
    "network": "string_example",
    "source_ip": "string_example"
  },
  "remote_syslog": {
    "archive": {
      "files": null,
      "size": "5m"
    },
    "cacerts": [
      "string_example"
    ],
    "console": {
      "contents": [
        {
          "facility": "config",
          "severity": "string_example"
        }
      ]
    },
    "enabled": true,
    "files": [
      {
        "archive": {
          "files": null,
          "size": "5m"
        },
        "contents": [
          {
            "facility": "config",
            "severity": "string_example"
          }
        ],
        "enable_tls": true,
        "explicit_priority": true,
        "file": "file-name",
        "match": "!alarm|ntp|errors.crc_error[chan]",
        "structured_data": true
      }
    ],
    "network": "default",
    "send_to_all_servers": true,
    "servers": [
      {
        "contents": [
          {
            "facility": "config",
            "severity": "string_example"
          }
        ],
        "explicit_priority": true,
        "facility": "config",
        "host": "syslogd.internal",
        "match": "!alarm|ntp|errors.crc_error[chan]",
        "port": null,
        "protocol": "string_example",
        "routing_instance": "routing-instance-name",
        "server_name": "syslogd.internal",
        "severity": "string_example",
        "source_address": "string_example",
        "structured_data": true,
        "tag": "string_example"
      }
    ],
    "time_format": "millisecond",
    "users": [
      {
        "contents": [
          {
            "facility": "config",
            "severity": "string_example"
          }
        ],
        "match": "\"!alarm|ntp|errors.crc_error[chan]\"",
        "user": "*"
      }
    ]
  },
  "remove_existing_configs": true,
  "report_gatt": true,
  "rogue": {
    "allowed_vlan_ids": [
      123
    ],
    "enabled": true,
    "honeypot_enabled": true,
    "min_duration": 10,
    "min_rogue_duration": 10,
    "min_rogue_rssi": -80,
    "min_rssi": -80,
    "whitelisted_bssids": [
      "string_example"
    ],
    "whitelisted_ssids": [
      "string_example"
    ]
  },
  "rtsa": {
    "app_waking": true,
    "disable_dead_reckoning": true,
    "disable_pressure_sensor": true,
    "enabled": true,
    "track_asset": true
  },
  "simple_alert": {
    "arp_failure": {
      "client_count": 123,
      "duration": 123,
      "incident_count": 123
    },
    "dhcp_failure": {
      "client_count": 123,
      "duration": 123,
      "incident_count": 123
    },
    "dns_failure": {
      "client_count": 123,
      "duration": 123,
      "incident_count": 123
    }
  },
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "skyatp": {
    "enabled": true,
    "send_ip_mac_mapping": true
  },
  "sle_thresholds": {
    "capacity": 123,
    "coverage": 123,
    "throughput": 123,
    "time-to-connect": 123
  },
  "snmp_config": {
    "client_list": [
      {
        "client_list_name": "clist-1",
        "clients": [
          "151.140.101.218/32"
        ]
      }
    ],
    "contact": "cns@juniper.net",
    "description": "Juniper QFX Series Switch - 1K_5LA",
    "enabled": true,
    "engine_id": "string_example",
    "engine_id_type": "string_example",
    "location": "Las Vegas, NV",
    "name": "TGH-1K-QFX10K",
    "network": "string_example",
    "trap_groups": [
      {
        "categories": [
          "authentication"
        ],
        "group_name": "profiler",
        "targets": [
          "172.29.158.19"
        ],
        "version": "string_example"
      }
    ],
    "v2c_config": [
      {
        "authorization": "read-only",
        "client_list_name": "clist-1",
        "community_name": "abc123",
        "view": "all"
      }
    ],
    "v3_config": {
      "notify": [
        {
          "name": "string_example",
          "tag": "string_example",
          "type": "string_example"
        }
      ],
      "notify_filter": [
        {
          "contents": [
            {
              "include": true,
              "oid": "1.3.6.1.4.1"
            }
          ],
          "profile_name": "string_example"
        }
      ],
      "target_address": [
        {
          "address": "10.11.0.2",
          "address_mask": "255.255.255.0",
          "port": "string_example",
          "tag_list": "string_example",
          "target_address_name": "target_address_name",
          "target_parameters": "string_example"
        }
      ],
      "target_parameters": [
        {
          "message_processing_model": "string_example",
          "name": "string_example",
          "notify_filter": "string_example",
          "security_level": "string_example",
          "security_model": "string_example",
          "security_name": "m01620"
        }
      ],
      "usm": [
        {
          "engine_type": "string_example",
          "remote_engine_id": "00:00:00:0b:00:00:70:10:6f:08:b6:3f",
          "users": [
            {
              "authentication_password": "string_example",
              "authentication_type": "string_example",
              "encryption_password": "string_example",
              "encryption_type": "string_example",
              "name": "string_example"
            }
          ]
        }
      ],
      "vacm": {
        "access": [
          {
            "group_name": "string_example",
            "prefix_list": [
              {
                "context_prefix": "iil",
                "notify_view": "all",
                "read_view": "all",
                "security_level": "string_example",
                "security_model": "string_example",
                "type": "string_example",
                "write_view": "all"
              }
            ]
          }
        ],
        "security_to_group": {
          "content": [
            {
              "group": "string_example",
              "security_name": "string_example"
            }
          ],
          "security_model": "string_example"
        }
      }
    },
    "views": [
      {
        "include": true,
        "oid": "1.3.6.1",
        "view_name": "all"
      }
    ]
  },
  "srx_app": {
    "enabled": true
  },
  "ssh_keys": [
    "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAA...Wxa6p6UW0ZbcP john@host"
  ],
  "ssr": {
    "auto_upgrade": {
      "channel": "string_example",
      "custom_versions": {},
      "enabled": true
    },
    "conductor_hosts": [
      "string_example"
    ],
    "conductor_token": "string_example",
    "disable_stats": true,
    "proxy": {
      "url": "https://proxy.corp.com:8080/"
    }
  },
  "status_portal": {
    "enabled": true,
    "hostnames": [
      "my.misty.com"
    ]
  },
  "switch": null,
  "switch_matching": {
    "enable": true,
    "rules": [
      {
        "additional_config_cmds": [
          "set snmp community public"
        ],
        "ip_config": {
          "network": "string_example",
          "type": "static"
        },
        "name": "string_example",
        "oob_ip_config": {
          "type": "static",
          "use_mgmt_vrf": true,
          "use_mgmt_vrf_for_host_out": true
        },
        "port_config": {},
        "port_mirroring": {},
        "stp_config": {
          "bridge_priority": "40k"
        },
        "switch_mgmt": {
          "ap_affinity_threshold": 123,
          "cli_banner": "\\t\\tWELCOME!",
          "cli_idle_timeout": 123,
          "config_revert_timer": 123,
          "dhcp_option_fqdn": true,
          "disable_oob_down_alarm": true,
          "fips_enabled": true,
          "local_accounts": {},
          "mxedge_proxy_host": "string_example",
          "mxedge_proxy_port": null,
          "protect_re": {
            "allowed_services": [
              "string_example"
            ],
            "custom": [
              {
                "port_range": "80,1035-1040",
                "protocol": "string_example",
                "subnets": [
                  "10.1.2.0/24"
                ]
              }
            ],
            "enabled": true,
            "hit_count": true,
            "trusted_hosts": [
              "10.242.3.0/24"
            ]
          },
          "radius": {
            "enabled": true,
            "radius_config": {
              "acct_immediate_update": true,
              "acct_interim_interval": 123,
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
              "auth_server_selection": "string_example",
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
              "auth_servers_retries": 123,
              "auth_servers_timeout": 123,
              "coa_enabled": true,
              "coa_port": null,
              "fast_dot1x_timers": true,
              "network": "string_example",
              "source_ip": "string_example"
            },
            "use_different_radius": "string_example"
          },
          "remove_existing_configs": true,
          "root_password": "string_example",
          "tacacs": {
            "acct_servers": [
              {
                "host": "string_example",
                "port": "string_example",
                "secret": "string_example",
                "timeout": 123
              }
            ],
            "default_role": "string_example",
            "enabled": true,
            "network": "string_example",
            "tacplus_servers": [
              {
                "host": "string_example",
                "port": "string_example",
                "secret": "string_example",
                "timeout": 123
              }
            ]
          },
          "use_mxedge_proxy": true
        }
      }
    ]
  },
  "switch_mgmt": {
    "ap_affinity_threshold": 123,
    "cli_banner": "\\t\\tWELCOME!",
    "cli_idle_timeout": 123,
    "config_revert_timer": 123,
    "dhcp_option_fqdn": true,
    "disable_oob_down_alarm": true,
    "fips_enabled": true,
    "local_accounts": {},
    "mxedge_proxy_host": "string_example",
    "mxedge_proxy_port": null,
    "protect_re": {
      "allowed_services": [
        "string_example"
      ],
      "custom": [
        {
          "port_range": "80,1035-1040",
          "protocol": "string_example",
          "subnets": [
            "10.1.2.0/24"
          ]
        }
      ],
      "enabled": true,
      "hit_count": true,
      "trusted_hosts": [
        "10.242.3.0/24"
      ]
    },
    "radius": {
      "enabled": true,
      "radius_config": {
        "acct_immediate_update": true,
        "acct_interim_interval": 123,
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
        "auth_server_selection": "string_example",
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
        "auth_servers_retries": 123,
        "auth_servers_timeout": 123,
        "coa_enabled": true,
        "coa_port": null,
        "fast_dot1x_timers": true,
        "network": "string_example",
        "source_ip": "string_example"
      },
      "use_different_radius": "string_example"
    },
    "remove_existing_configs": true,
    "root_password": "string_example",
    "tacacs": {
      "acct_servers": [
        {
          "host": "string_example",
          "port": "string_example",
          "secret": "string_example",
          "timeout": 123
        }
      ],
      "default_role": "string_example",
      "enabled": true,
      "network": "string_example",
      "tacplus_servers": [
        {
          "host": "string_example",
          "port": "string_example",
          "secret": "string_example",
          "timeout": 123
        }
      ]
    },
    "use_mxedge_proxy": true
  },
  "switch_updown_threshold": null,
  "synthetic_test": {
    "aggressiveness": "string_example",
    "custom_probes": {},
    "disabled": true,
    "lan_networks": [
      {
        "networks": [
          "string_example"
        ],
        "probes": [
          "string_example"
        ]
      }
    ],
    "vlans": [
      {
        "custom_test_urls": [
          "string_example"
        ],
        "disabled": true,
        "probes": [
          "string_example"
        ],
        "vlan_ids": [
          null
        ]
      }
    ],
    "wan_speedtest": {
      "enabled": true,
      "time_of_day": "12:00"
    }
  },
  "track_anonymous_devices": true,
  "tunterm_monitoring": [
    {
      "host": "10.2.8.15",
      "port": 80,
      "protocol": "tcp",
      "src_vlan_id": 5,
      "timeout": 300
    }
  ],
  "tunterm_monitoring_disabled": true,
  "tunterm_multicast_config": {
    "mdns": {
      "enabled": true,
      "vlan_ids": [
        123
      ]
    },
    "multicast_all": true,
    "ssdp": {
      "enabled": true,
      "vlan_ids": [
        123
      ]
    }
  },
  "uplink_port_config": {
    "dot1x": true,
    "keep_wlans_up_if_down": true
  },
  "vars": {},
  "vna": {
    "enabled": true
  },
  "vpn_path_updown_threshold": null,
  "vpn_peer_updown_threshold": null,
  "vrf_config": {
    "enabled": true
  },
  "vrf_instances": {},
  "vrrp_groups": {},
  "vs_instance": {},
  "wan_vna": {
    "enabled": true
  },
  "watched_station_url": "https://papi.s3.amazonaws.com/watched_station/xxx...",
  "whitelist_url": "https://papi.s3.amazonaws.com/whitelist/xxx...",
  "wids": {
    "repeated_auth_failures": {
      "duration": 60,
      "threshold": 123
    }
  },
  "wifi": {
    "cisco_enabled": true,
    "disable_11k": true,
    "disable_radios_when_power_constrained": true,
    "enable_arp_spoof_check": true,
    "enable_shared_radio_scanning": true,
    "enabled": true,
    "locate_connected": true,
    "locate_unconnected": true,
    "mesh_allow_dfs": true,
    "mesh_enable_crm": true,
    "mesh_enabled": true,
    "mesh_psk": "string_example",
    "mesh_ssid": "string_example",
    "proxy_arp": "string_example"
  },
  "wired_vna": {
    "enabled": true
  },
  "zone_occupancy_alert": {
    "email_notifiers": [
      "string_example"
    ],
    "enabled": true,
    "threshold": 5
  }
});
$resp = $client->sites setting->updateSiteSettings($model->toArray());
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

## `POST /api/v1/sites/{site_id}/setting/blacklist`

**Summary:** createSiteWirelessClientsBlocklist

**Request (raw array example)**

```json
{
  "macs": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MacAddresses;

$model = new MacAddresses({
  "macs": [
    "string_example"
  ]
});
$resp = $client->sites setting->createSiteWirelessClientsBlocklist($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/setting/blacklist`

**Summary:** deleteSiteWirelessClientsBlocklist

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/setting/derived`

**Summary:** getSiteSettingDerived

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/setting/watched_station`

**Summary:** createSiteWatchedStations

**Request (raw array example)**

```json
{
  "macs": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MacAddresses;

$model = new MacAddresses({
  "macs": [
    "string_example"
  ]
});
$resp = $client->sites setting->createSiteWatchedStations($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/setting/watched_station`

**Summary:** deleteSiteWatchedStations

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/setting/whitelist`

**Summary:** createSiteWirelessClientsAllowlist

**Request (raw array example)**

```json
{
  "macs": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MacAddresses;

$model = new MacAddresses({
  "macs": [
    "string_example"
  ]
});
$resp = $client->sites setting->createSiteWirelessClientsAllowlist($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/setting/whitelist`

**Summary:** deleteSiteWirelessClientsAllowlist

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

