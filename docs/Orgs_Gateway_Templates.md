# Orgs Gateway Templates API

## `GET /api/v1/orgs/{org_id}/gatewaytemplates`

**Summary:** listOrgGatewayTemplates

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

## `POST /api/v1/orgs/{org_id}/gatewaytemplates`

**Summary:** createOrgGatewayTemplate

**Request (raw array example)**

```json
{
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
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\GatewayTemplate;

$model = new GatewayTemplate({
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
});
$resp = $client->orgs gateway templates->createOrgGatewayTemplate($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/gatewaytemplates/{gatewaytemplate_id}`

**Summary:** getOrgGatewayTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/gatewaytemplates/{gatewaytemplate_id}`

**Summary:** updateOrgGatewayTemplate

**Request (raw array example)**

```json
{
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
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\GatewayTemplate;

$model = new GatewayTemplate({
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
});
$resp = $client->orgs gateway templates->updateOrgGatewayTemplate($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/gatewaytemplates/{gatewaytemplate_id}`

**Summary:** deleteOrgGatewayTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

