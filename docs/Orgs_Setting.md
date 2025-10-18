# Orgs Setting API

## `GET /api/v1/orgs/{org_id}/setting`

**Summary:** getOrgSettings

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/setting`

**Summary:** updateOrgSettings

**Request (raw array example)**

```json
{
  "ap_updown_threshold": null,
  "api_policy": {
    "no_reveal": true
  },
  "auto_device_naming": {
    "enable": true,
    "rules": [
      {
        "expression": "split(.)[1]",
        "match_device": "string_example",
        "prefix": "string_example",
        "src": "string_example",
        "suffix": "string_example"
      }
    ]
  },
  "auto_deviceprofile_assignment": {
    "enable": true,
    "rules": [
      {
        "create_new_site_if_needed": true,
        "expression": "split(.)[1]",
        "gatewaytemplate_id": "string_example",
        "match_country": "string_example",
        "match_device_type": "string_example",
        "match_model": "string_example",
        "model": "string_example",
        "prefix": "XX-",
        "src": "string_example",
        "subnet": "string_example",
        "suffix": "-YY",
        "value": "string_example"
      }
    ]
  },
  "auto_site_assignment": {
    "enable": true,
    "rules": [
      {
        "create_new_site_if_needed": true,
        "expression": "split(.)[1]",
        "gatewaytemplate_id": "string_example",
        "match_country": "string_example",
        "match_device_type": "string_example",
        "match_model": "string_example",
        "model": "string_example",
        "prefix": "XX-",
        "src": "string_example",
        "subnet": "string_example",
        "suffix": "-YY",
        "value": "string_example"
      }
    ]
  },
  "blacklist_url": "https://papi.s3.amazonaws.com/blacklist/xxx...",
  "cacerts": [
    "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
  ],
  "celona": {
    "api_key": "$2a$04$OkaLCoJn6rDjR8ha.oduQVDST3.kJNIrte",
    "api_prefix": "cc3273fcb016470e"
  },
  "cloudshark": {
    "apitoken": "accbd6f10c6d05c3",
    "url": "https://cloudshark.hosted.domain"
  },
  "cradlepoint": {
    "cp_api_id": "84446d61-2206-4ea5-855a-0043f980be54",
    "cp_api_key": "79c329da9893e34099c7d8ad5cb9c941",
    "ecm_api_id": "73446d61-2206-4ea5-855a-0043f980be62",
    "ecm_api_key": "68b329da9893e34099c7d8ad5cb9c940",
    "enable_lldp": true
  },
  "created_time": 1.23,
  "device_cert": {
    "cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
    "key": "-----BEGIN PRI..."
  },
  "device_updown_threshold": 123,
  "disable_pcap": true,
  "disable_remote_shell": true,
  "for_site": true,
  "gateway_mgmt": {
    "app_probing": {
      "apps": [
        "string_example"
      ]
    },
    "app_usage": true,
    "fips_enabled": true,
    "host_in_policies": {
      "icmp": {
        "tenants": [
          "string_example"
        ]
      },
      "snmp": {
        "tenants": [
          "string_example"
        ]
      }
    },
    "host_out_policies": {
      "dns": {
        "path_preference": "string_example"
      },
      "ntp": {
        "path_preference": "string_example"
      },
      "syslog": {
        "path_preference": "broadband_wans",
        "servers": [
          {
            "host": "103.35.3.5",
            "path_preference": "dc_only",
            "server_name": "dc_syslog_server"
          }
        ]
      }
    },
    "overlay_ip": {
      "ip": "string_example",
      "node1_ip": "string_example"
    }
  },
  "gateway_updown_threshold": 10,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "installer": {
    "allow_all_devices": true,
    "allow_all_sites": true,
    "extra_site_ids": [
      "4ac1dcf4-9d8b-7211-65c4-057819f0862b"
    ],
    "grace_period": 123
  },
  "jcloud": {
    "org_apitoken": "string_example",
    "org_apitoken_name": "string_example",
    "org_id": "string_example"
  },
  "jcloud_ra": {
    "org_apitoken": "string_example",
    "org_apitoken_name": "string_example",
    "org_id": "string_example"
  },
  "juniper": {
    "accounts": [
      {
        "linked_by": "John Smith (john@abccorp.com)",
        "name": "ABC Corp"
      }
    ]
  },
  "juniper_srx": {
    "auto_upgrade": {
      "custom_versions": {},
      "enabled": true,
      "snapshot": true
    }
  },
  "junos_shell_access": {
    "admin": "string_example",
    "helpdesk": "string_example",
    "read": "string_example",
    "write": "string_example"
  },
  "marvis": {
    "auto_operations": {
      "bounce_port_for_abnormal_poe_client": true,
      "disable_port_when_ddos_protocol_violation": true,
      "disable_port_when_rogue_dhcp_server_detected": true
    }
  },
  "mgmt": {
    "mxtunnel_ids": [
      "08cd7499-5841-51c8-e663-fb16b6f3b45e"
    ],
    "use_mxtunnel": true,
    "use_wxtunnel": true
  },
  "mist_nac": {
    "cacerts": [
      "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
    ],
    "default_idp_id": "string_example",
    "disable_rsae_algorithms": true,
    "eap_ssl_security_level": 123,
    "eu_only": true,
    "idp_machine_cert_lookup_field": "string_example",
    "idp_user_cert_lookup_field": "string_example",
    "idps": [
      {
        "exclude_realms": [
          "string_example"
        ],
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "user_realms": [
          "abc"
        ]
      }
    ],
    "server_cert": {
      "cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
      "key": "-----BEGIN PRI...",
      "password": "string_example"
    },
    "use_ip_version": "string_example",
    "use_ssl_port": true
  },
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "optic_port_config": {},
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "password_policy": {
    "enabled": true,
    "expiry_in_days": 60,
    "min_length": 123,
    "requires_special_char": true,
    "requires_two_factor_auth": true
  },
  "pcap": {
    "bucket": "myorg_pcap",
    "max_pkt_len": 128
  },
  "pcap_bucket_verified": true,
  "security": {
    "disable_local_ssh": true,
    "fips_zeroize_password": "NUKETHESITE",
    "limit_ssh_access": true
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
  "switch": {
    "auto_upgrade": {
      "custom_versions": {},
      "enabled": true,
      "snapshot": true
    }
  },
  "switch_mgmt": {
    "ap_affinity_threshold": 10
  },
  "switch_updown_threshold": 0,
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
  "tags": [
    "string_example"
  ],
  "ui_idle_timeout": 10,
  "ui_no_tracking": true,
  "vpn_options": {
    "as_base": 123,
    "enable_ipv6": true,
    "st_subnet": "string_example"
  },
  "wan_pma": {
    "enabled": true
  },
  "wired_pma": {
    "enabled": true
  },
  "wireless_pma": {
    "enabled": true
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgSetting;

$model = new OrgSetting({
  "ap_updown_threshold": null,
  "api_policy": {
    "no_reveal": true
  },
  "auto_device_naming": {
    "enable": true,
    "rules": [
      {
        "expression": "split(.)[1]",
        "match_device": "string_example",
        "prefix": "string_example",
        "src": "string_example",
        "suffix": "string_example"
      }
    ]
  },
  "auto_deviceprofile_assignment": {
    "enable": true,
    "rules": [
      {
        "create_new_site_if_needed": true,
        "expression": "split(.)[1]",
        "gatewaytemplate_id": "string_example",
        "match_country": "string_example",
        "match_device_type": "string_example",
        "match_model": "string_example",
        "model": "string_example",
        "prefix": "XX-",
        "src": "string_example",
        "subnet": "string_example",
        "suffix": "-YY",
        "value": "string_example"
      }
    ]
  },
  "auto_site_assignment": {
    "enable": true,
    "rules": [
      {
        "create_new_site_if_needed": true,
        "expression": "split(.)[1]",
        "gatewaytemplate_id": "string_example",
        "match_country": "string_example",
        "match_device_type": "string_example",
        "match_model": "string_example",
        "model": "string_example",
        "prefix": "XX-",
        "src": "string_example",
        "subnet": "string_example",
        "suffix": "-YY",
        "value": "string_example"
      }
    ]
  },
  "blacklist_url": "https://papi.s3.amazonaws.com/blacklist/xxx...",
  "cacerts": [
    "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
  ],
  "celona": {
    "api_key": "$2a$04$OkaLCoJn6rDjR8ha.oduQVDST3.kJNIrte",
    "api_prefix": "cc3273fcb016470e"
  },
  "cloudshark": {
    "apitoken": "accbd6f10c6d05c3",
    "url": "https://cloudshark.hosted.domain"
  },
  "cradlepoint": {
    "cp_api_id": "84446d61-2206-4ea5-855a-0043f980be54",
    "cp_api_key": "79c329da9893e34099c7d8ad5cb9c941",
    "ecm_api_id": "73446d61-2206-4ea5-855a-0043f980be62",
    "ecm_api_key": "68b329da9893e34099c7d8ad5cb9c940",
    "enable_lldp": true
  },
  "created_time": 1.23,
  "device_cert": {
    "cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
    "key": "-----BEGIN PRI..."
  },
  "device_updown_threshold": 123,
  "disable_pcap": true,
  "disable_remote_shell": true,
  "for_site": true,
  "gateway_mgmt": {
    "app_probing": {
      "apps": [
        "string_example"
      ]
    },
    "app_usage": true,
    "fips_enabled": true,
    "host_in_policies": {
      "icmp": {
        "tenants": [
          "string_example"
        ]
      },
      "snmp": {
        "tenants": [
          "string_example"
        ]
      }
    },
    "host_out_policies": {
      "dns": {
        "path_preference": "string_example"
      },
      "ntp": {
        "path_preference": "string_example"
      },
      "syslog": {
        "path_preference": "broadband_wans",
        "servers": [
          {
            "host": "103.35.3.5",
            "path_preference": "dc_only",
            "server_name": "dc_syslog_server"
          }
        ]
      }
    },
    "overlay_ip": {
      "ip": "string_example",
      "node1_ip": "string_example"
    }
  },
  "gateway_updown_threshold": 10,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "installer": {
    "allow_all_devices": true,
    "allow_all_sites": true,
    "extra_site_ids": [
      "4ac1dcf4-9d8b-7211-65c4-057819f0862b"
    ],
    "grace_period": 123
  },
  "jcloud": {
    "org_apitoken": "string_example",
    "org_apitoken_name": "string_example",
    "org_id": "string_example"
  },
  "jcloud_ra": {
    "org_apitoken": "string_example",
    "org_apitoken_name": "string_example",
    "org_id": "string_example"
  },
  "juniper": {
    "accounts": [
      {
        "linked_by": "John Smith (john@abccorp.com)",
        "name": "ABC Corp"
      }
    ]
  },
  "juniper_srx": {
    "auto_upgrade": {
      "custom_versions": {},
      "enabled": true,
      "snapshot": true
    }
  },
  "junos_shell_access": {
    "admin": "string_example",
    "helpdesk": "string_example",
    "read": "string_example",
    "write": "string_example"
  },
  "marvis": {
    "auto_operations": {
      "bounce_port_for_abnormal_poe_client": true,
      "disable_port_when_ddos_protocol_violation": true,
      "disable_port_when_rogue_dhcp_server_detected": true
    }
  },
  "mgmt": {
    "mxtunnel_ids": [
      "08cd7499-5841-51c8-e663-fb16b6f3b45e"
    ],
    "use_mxtunnel": true,
    "use_wxtunnel": true
  },
  "mist_nac": {
    "cacerts": [
      "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
    ],
    "default_idp_id": "string_example",
    "disable_rsae_algorithms": true,
    "eap_ssl_security_level": 123,
    "eu_only": true,
    "idp_machine_cert_lookup_field": "string_example",
    "idp_user_cert_lookup_field": "string_example",
    "idps": [
      {
        "exclude_realms": [
          "string_example"
        ],
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "user_realms": [
          "abc"
        ]
      }
    ],
    "server_cert": {
      "cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
      "key": "-----BEGIN PRI...",
      "password": "string_example"
    },
    "use_ip_version": "string_example",
    "use_ssl_port": true
  },
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "optic_port_config": {},
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "password_policy": {
    "enabled": true,
    "expiry_in_days": 60,
    "min_length": 123,
    "requires_special_char": true,
    "requires_two_factor_auth": true
  },
  "pcap": {
    "bucket": "myorg_pcap",
    "max_pkt_len": 128
  },
  "pcap_bucket_verified": true,
  "security": {
    "disable_local_ssh": true,
    "fips_zeroize_password": "NUKETHESITE",
    "limit_ssh_access": true
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
  "switch": {
    "auto_upgrade": {
      "custom_versions": {},
      "enabled": true,
      "snapshot": true
    }
  },
  "switch_mgmt": {
    "ap_affinity_threshold": 10
  },
  "switch_updown_threshold": 0,
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
  "tags": [
    "string_example"
  ],
  "ui_idle_timeout": 10,
  "ui_no_tracking": true,
  "vpn_options": {
    "as_base": 123,
    "enable_ipv6": true,
    "st_subnet": "string_example"
  },
  "wan_pma": {
    "enabled": true
  },
  "wired_pma": {
    "enabled": true
  },
  "wireless_pma": {
    "enabled": true
  }
});
$resp = $client->orgs setting->updateOrgSettings($model->toArray());
print_r($resp);
```

**Responses**

- **200**: OK
```json
{
  "ap_updown_threshold": null,
  "api_policy": {
    "no_reveal": true
  },
  "auto_device_naming": {
    "enable": true,
    "rules": [
      {
        "expression": "split(.)[1]",
        "match_device": "string_example",
        "prefix": "string_example",
        "src": "string_example",
        "suffix": "string_example"
      }
    ]
  },
  "auto_deviceprofile_assignment": {
    "enable": true,
    "rules": [
      {
        "create_new_site_if_needed": true,
        "expression": "split(.)[1]",
        "gatewaytemplate_id": "string_example",
        "match_country": "string_example",
        "match_device_type": "string_example",
        "match_model": "string_example",
        "model": "string_example",
        "prefix": "XX-",
        "src": "string_example",
        "subnet": "string_example",
        "suffix": "-YY",
        "value": "string_example"
      }
    ]
  },
  "auto_site_assignment": {
    "enable": true,
    "rules": [
      {
        "create_new_site_if_needed": true,
        "expression": "split(.)[1]",
        "gatewaytemplate_id": "string_example",
        "match_country": "string_example",
        "match_device_type": "string_example",
        "match_model": "string_example",
        "model": "string_example",
        "prefix": "XX-",
        "src": "string_example",
        "subnet": "string_example",
        "suffix": "-YY",
        "value": "string_example"
      }
    ]
  },
  "blacklist_url": "https://papi.s3.amazonaws.com/blacklist/xxx...",
  "cacerts": [
    "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
  ],
  "celona": {
    "api_key": "$2a$04$OkaLCoJn6rDjR8ha.oduQVDST3.kJNIrte",
    "api_prefix": "cc3273fcb016470e"
  },
  "cloudshark": {
    "apitoken": "accbd6f10c6d05c3",
    "url": "https://cloudshark.hosted.domain"
  },
  "cradlepoint": {
    "cp_api_id": "84446d61-2206-4ea5-855a-0043f980be54",
    "cp_api_key": "79c329da9893e34099c7d8ad5cb9c941",
    "ecm_api_id": "73446d61-2206-4ea5-855a-0043f980be62",
    "ecm_api_key": "68b329da9893e34099c7d8ad5cb9c940",
    "enable_lldp": true
  },
  "created_time": 1.23,
  "device_cert": {
    "cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
    "key": "-----BEGIN PRI..."
  },
  "device_updown_threshold": 123,
  "disable_pcap": true,
  "disable_remote_shell": true,
  "for_site": true,
  "gateway_mgmt": {
    "app_probing": {
      "apps": [
        "string_example"
      ]
    },
    "app_usage": true,
    "fips_enabled": true,
    "host_in_policies": {
      "icmp": {
        "tenants": [
          "string_example"
        ]
      },
      "snmp": {
        "tenants": [
          "string_example"
        ]
      }
    },
    "host_out_policies": {
      "dns": {
        "path_preference": "string_example"
      },
      "ntp": {
        "path_preference": "string_example"
      },
      "syslog": {
        "path_preference": "broadband_wans",
        "servers": [
          {
            "host": "103.35.3.5",
            "path_preference": "dc_only",
            "server_name": "dc_syslog_server"
          }
        ]
      }
    },
    "overlay_ip": {
      "ip": "string_example",
      "node1_ip": "string_example"
    }
  },
  "gateway_updown_threshold": 10,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "installer": {
    "allow_all_devices": true,
    "allow_all_sites": true,
    "extra_site_ids": [
      "4ac1dcf4-9d8b-7211-65c4-057819f0862b"
    ],
    "grace_period": 123
  },
  "jcloud": {
    "org_apitoken": "string_example",
    "org_apitoken_name": "string_example",
    "org_id": "string_example"
  },
  "jcloud_ra": {
    "org_apitoken": "string_example",
    "org_apitoken_name": "string_example",
    "org_id": "string_example"
  },
  "juniper": {
    "accounts": [
      {
        "linked_by": "John Smith (john@abccorp.com)",
        "name": "ABC Corp"
      }
    ]
  },
  "juniper_srx": {
    "auto_upgrade": {
      "custom_versions": {},
      "enabled": true,
      "snapshot": true
    }
  },
  "junos_shell_access": {
    "admin": "string_example",
    "helpdesk": "string_example",
    "read": "string_example",
    "write": "string_example"
  },
  "marvis": {
    "auto_operations": {
      "bounce_port_for_abnormal_poe_client": true,
      "disable_port_when_ddos_protocol_violation": true,
      "disable_port_when_rogue_dhcp_server_detected": true
    }
  },
  "mgmt": {
    "mxtunnel_ids": [
      "08cd7499-5841-51c8-e663-fb16b6f3b45e"
    ],
    "use_mxtunnel": true,
    "use_wxtunnel": true
  },
  "mist_nac": {
    "cacerts": [
      "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
    ],
    "default_idp_id": "string_example",
    "disable_rsae_algorithms": true,
    "eap_ssl_security_level": 123,
    "eu_only": true,
    "idp_machine_cert_lookup_field": "string_example",
    "idp_user_cert_lookup_field": "string_example",
    "idps": [
      {
        "exclude_realms": [
          "string_example"
        ],
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "user_realms": [
          "abc"
        ]
      }
    ],
    "server_cert": {
      "cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
      "key": "-----BEGIN PRI...",
      "password": "string_example"
    },
    "use_ip_version": "string_example",
    "use_ssl_port": true
  },
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "optic_port_config": {},
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "password_policy": {
    "enabled": true,
    "expiry_in_days": 60,
    "min_length": 123,
    "requires_special_char": true,
    "requires_two_factor_auth": true
  },
  "pcap": {
    "bucket": "myorg_pcap",
    "max_pkt_len": 128
  },
  "pcap_bucket_verified": true,
  "security": {
    "disable_local_ssh": true,
    "fips_zeroize_password": "NUKETHESITE",
    "limit_ssh_access": true
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
  "switch": {
    "auto_upgrade": {
      "custom_versions": {},
      "enabled": true,
      "snapshot": true
    }
  },
  "switch_mgmt": {
    "ap_affinity_threshold": 10
  },
  "switch_updown_threshold": 0,
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
  "tags": [
    "string_example"
  ],
  "ui_idle_timeout": 10,
  "ui_no_tracking": true,
  "vpn_options": {
    "as_base": 123,
    "enable_ipv6": true,
    "st_subnet": "string_example"
  },
  "wan_pma": {
    "enabled": true
  },
  "wired_pma": {
    "enabled": true
  },
  "wireless_pma": {
    "enabled": true
  }
}
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/blacklist`

**Summary:** createOrgWirelessClientsBlocklist

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
$resp = $client->orgs setting->createOrgWirelessClientsBlocklist($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/setting/blacklist`

**Summary:** deleteOrgWirelessClientsBlocklist

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/pcap_bucket/setup`

**Summary:** setOrgCustomBucket

**Request (raw array example)**

```json
{
  "bucket": "company-private-pcap"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\PcapBucket;

$model = new PcapBucket({
  "bucket": "company-private-pcap"
});
$resp = $client->orgs setting->setOrgCustomBucket($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/setting/pcap_bucket/verify`

**Summary:** verifyOrgCustomBucket

**Request (raw array example)**

```json
{
  "bucket": "company-private-pcap",
  "verify_token": "eyJhbGciOiJIUzI1J9.eyJzdWIiOiIxMjM0joiMjgxOG5MDIyfQ.2rzcRvMA3Eg09NnjCAC-1EWMRtxAnFDM"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\PcapBucketVerify;

$model = new PcapBucketVerify({
  "bucket": "company-private-pcap",
  "verify_token": "eyJhbGciOiJIUzI1J9.eyJzdWIiOiIxMjM0joiMjgxOG5MDIyfQ.2rzcRvMA3Eg09NnjCAC-1EWMRtxAnFDM"
});
$resp = $client->orgs setting->verifyOrgCustomBucket($model->toArray());
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

