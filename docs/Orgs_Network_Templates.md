# Orgs Network Templates API

## `GET /api/v1/orgs/{org_id}/networktemplates`

**Summary:** listOrgNetworkTemplates

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

## `POST /api/v1/orgs/{org_id}/networktemplates`

**Summary:** createOrgNetworkTemplate

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
  "created_time": 1.23,
  "dhcp_snooping": {
    "all_networks": true,
    "enable_arp_spoof_check": true,
    "enable_ip_source_guard": true,
    "enabled": true,
    "networks": [
      "string_example"
    ]
  },
  "dns_servers": [
    "string_example"
  ],
  "dns_suffix": [
    "string_example"
  ],
  "extra_routes": {},
  "extra_routes6": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "import_org_networks": [
    "ap"
  ],
  "mist_nac": {
    "enabled": true,
    "network": "string_example"
  },
  "modified_time": 1.23,
  "name": "string_example",
  "networks": {},
  "ntp_servers": [
    "string_example"
  ],
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "ospf_areas": {},
  "port_mirroring": {},
  "port_usages": {},
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
  "vrf_config": {
    "enabled": true
  },
  "vrf_instances": {}
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NetworkTemplate;

$model = new NetworkTemplate({
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
  "created_time": 1.23,
  "dhcp_snooping": {
    "all_networks": true,
    "enable_arp_spoof_check": true,
    "enable_ip_source_guard": true,
    "enabled": true,
    "networks": [
      "string_example"
    ]
  },
  "dns_servers": [
    "string_example"
  ],
  "dns_suffix": [
    "string_example"
  ],
  "extra_routes": {},
  "extra_routes6": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "import_org_networks": [
    "ap"
  ],
  "mist_nac": {
    "enabled": true,
    "network": "string_example"
  },
  "modified_time": 1.23,
  "name": "string_example",
  "networks": {},
  "ntp_servers": [
    "string_example"
  ],
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "ospf_areas": {},
  "port_mirroring": {},
  "port_usages": {},
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
  "vrf_config": {
    "enabled": true
  },
  "vrf_instances": {}
});
$resp = $client->orgs network templates->createOrgNetworkTemplate($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/networktemplates/{networktemplate_id}`

**Summary:** getOrgNetworkTemplate

**Responses**

- **200**: OK
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
  "created_time": 1.23,
  "dhcp_snooping": {
    "all_networks": true,
    "enable_arp_spoof_check": true,
    "enable_ip_source_guard": true,
    "enabled": true,
    "networks": [
      "string_example"
    ]
  },
  "dns_servers": [
    "string_example"
  ],
  "dns_suffix": [
    "string_example"
  ],
  "extra_routes": {},
  "extra_routes6": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "import_org_networks": [
    "ap"
  ],
  "mist_nac": {
    "enabled": true,
    "network": "string_example"
  },
  "modified_time": 1.23,
  "name": "string_example",
  "networks": {},
  "ntp_servers": [
    "string_example"
  ],
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "ospf_areas": {},
  "port_mirroring": {},
  "port_usages": {},
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
  "vrf_config": {
    "enabled": true
  },
  "vrf_instances": {}
}
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/networktemplates/{networktemplate_id}`

**Summary:** updateOrgNetworkTemplate

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
  "created_time": 1.23,
  "dhcp_snooping": {
    "all_networks": true,
    "enable_arp_spoof_check": true,
    "enable_ip_source_guard": true,
    "enabled": true,
    "networks": [
      "string_example"
    ]
  },
  "dns_servers": [
    "string_example"
  ],
  "dns_suffix": [
    "string_example"
  ],
  "extra_routes": {},
  "extra_routes6": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "import_org_networks": [
    "ap"
  ],
  "mist_nac": {
    "enabled": true,
    "network": "string_example"
  },
  "modified_time": 1.23,
  "name": "string_example",
  "networks": {},
  "ntp_servers": [
    "string_example"
  ],
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "ospf_areas": {},
  "port_mirroring": {},
  "port_usages": {},
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
  "vrf_config": {
    "enabled": true
  },
  "vrf_instances": {}
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NetworkTemplate;

$model = new NetworkTemplate({
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
  "created_time": 1.23,
  "dhcp_snooping": {
    "all_networks": true,
    "enable_arp_spoof_check": true,
    "enable_ip_source_guard": true,
    "enabled": true,
    "networks": [
      "string_example"
    ]
  },
  "dns_servers": [
    "string_example"
  ],
  "dns_suffix": [
    "string_example"
  ],
  "extra_routes": {},
  "extra_routes6": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "import_org_networks": [
    "ap"
  ],
  "mist_nac": {
    "enabled": true,
    "network": "string_example"
  },
  "modified_time": 1.23,
  "name": "string_example",
  "networks": {},
  "ntp_servers": [
    "string_example"
  ],
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "ospf_areas": {},
  "port_mirroring": {},
  "port_usages": {},
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
  "vrf_config": {
    "enabled": true
  },
  "vrf_instances": {}
});
$resp = $client->orgs network templates->updateOrgNetworkTemplate($model->toArray());
print_r($resp);
```

**Responses**

- **200**: OK
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
  "created_time": 1.23,
  "dhcp_snooping": {
    "all_networks": true,
    "enable_arp_spoof_check": true,
    "enable_ip_source_guard": true,
    "enabled": true,
    "networks": [
      "string_example"
    ]
  },
  "dns_servers": [
    "string_example"
  ],
  "dns_suffix": [
    "string_example"
  ],
  "extra_routes": {},
  "extra_routes6": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "import_org_networks": [
    "ap"
  ],
  "mist_nac": {
    "enabled": true,
    "network": "string_example"
  },
  "modified_time": 1.23,
  "name": "string_example",
  "networks": {},
  "ntp_servers": [
    "string_example"
  ],
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "ospf_areas": {},
  "port_mirroring": {},
  "port_usages": {},
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
  "vrf_config": {
    "enabled": true
  },
  "vrf_instances": {}
}
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `DELETE /api/v1/orgs/{org_id}/networktemplates/{networktemplate_id}`

**Summary:** deleteOrgNetworkTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

