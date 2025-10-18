# Orgs EVPN Topologies API

## `GET /api/v1/orgs/{org_id}/evpn_topologies`

**Summary:** listOrgEvpnTopologies

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`for_site`|query|false|`#/components/schemas/mxedge_for_site`|Filter for org/site level EVPN Toplogies|
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

## `POST /api/v1/orgs/{org_id}/evpn_topologies`

**Summary:** createOrgEvpnTopology

**Request (raw array example)**

```json
{
  "created_time": 1.23,
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
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "CC",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "overwrite": true,
  "pod_names": {},
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "switch_configs": {},
  "switches": [
    {
      "config": {
        "dhcpd_config": {
          "enabled": true
        },
        "networks": {},
        "other_ip_configs": {},
        "port_config": {},
        "port_usages": {},
        "router_id": "10.2.1.10",
        "vrf_config": {
          "enabled": true
        }
      },
      "deviceprofile_id": "6a1deab1-96df-4fa2-8455-d5253f943d06",
      "downlink_ips": [
        "string_example"
      ],
      "downlinks": [
        "string_example"
      ],
      "esilaglinks": [
        "string_example"
      ],
      "evpn_id": 123,
      "mac": "5c5b35000003",
      "model": "QFX10002-36Q",
      "pod": 123,
      "pods": [
        123
      ],
      "role": "string_example",
      "router_id": "172.16.254.4",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "suggested_downlinks": [
        "string_example"
      ],
      "suggested_esilaglinks": [
        "string_example"
      ],
      "suggested_uplinks": [
        "string_example"
      ],
      "uplinks": [
        "string_example"
      ]
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\EvpnTopology;

$model = new EvpnTopology({
  "created_time": 1.23,
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
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "CC",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "overwrite": true,
  "pod_names": {},
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "switch_configs": {},
  "switches": [
    {
      "config": {
        "dhcpd_config": {
          "enabled": true
        },
        "networks": {},
        "other_ip_configs": {},
        "port_config": {},
        "port_usages": {},
        "router_id": "10.2.1.10",
        "vrf_config": {
          "enabled": true
        }
      },
      "deviceprofile_id": "6a1deab1-96df-4fa2-8455-d5253f943d06",
      "downlink_ips": [
        "string_example"
      ],
      "downlinks": [
        "string_example"
      ],
      "esilaglinks": [
        "string_example"
      ],
      "evpn_id": 123,
      "mac": "5c5b35000003",
      "model": "QFX10002-36Q",
      "pod": 123,
      "pods": [
        123
      ],
      "role": "string_example",
      "router_id": "172.16.254.4",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "suggested_downlinks": [
        "string_example"
      ],
      "suggested_esilaglinks": [
        "string_example"
      ],
      "suggested_uplinks": [
        "string_example"
      ],
      "uplinks": [
        "string_example"
      ]
    }
  ]
});
$resp = $client->orgs evpn topologies->createOrgEvpnTopology($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/evpn_topologies/{evpn_topology_id}`

**Summary:** getOrgEvpnTopology

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/evpn_topologies/{evpn_topology_id}`

**Summary:** updateOrgEvpnTopology

**Request (raw array example)**

```json
{
  "created_time": 1.23,
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
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "CC",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "overwrite": true,
  "pod_names": {},
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "switch_configs": {},
  "switches": [
    {
      "config": {
        "dhcpd_config": {
          "enabled": true
        },
        "networks": {},
        "other_ip_configs": {},
        "port_config": {},
        "port_usages": {},
        "router_id": "10.2.1.10",
        "vrf_config": {
          "enabled": true
        }
      },
      "deviceprofile_id": "6a1deab1-96df-4fa2-8455-d5253f943d06",
      "downlink_ips": [
        "string_example"
      ],
      "downlinks": [
        "string_example"
      ],
      "esilaglinks": [
        "string_example"
      ],
      "evpn_id": 123,
      "mac": "5c5b35000003",
      "model": "QFX10002-36Q",
      "pod": 123,
      "pods": [
        123
      ],
      "role": "string_example",
      "router_id": "172.16.254.4",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "suggested_downlinks": [
        "string_example"
      ],
      "suggested_esilaglinks": [
        "string_example"
      ],
      "suggested_uplinks": [
        "string_example"
      ],
      "uplinks": [
        "string_example"
      ]
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\EvpnTopology;

$model = new EvpnTopology({
  "created_time": 1.23,
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
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "CC",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "overwrite": true,
  "pod_names": {},
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "switch_configs": {},
  "switches": [
    {
      "config": {
        "dhcpd_config": {
          "enabled": true
        },
        "networks": {},
        "other_ip_configs": {},
        "port_config": {},
        "port_usages": {},
        "router_id": "10.2.1.10",
        "vrf_config": {
          "enabled": true
        }
      },
      "deviceprofile_id": "6a1deab1-96df-4fa2-8455-d5253f943d06",
      "downlink_ips": [
        "string_example"
      ],
      "downlinks": [
        "string_example"
      ],
      "esilaglinks": [
        "string_example"
      ],
      "evpn_id": 123,
      "mac": "5c5b35000003",
      "model": "QFX10002-36Q",
      "pod": 123,
      "pods": [
        123
      ],
      "role": "string_example",
      "router_id": "172.16.254.4",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "suggested_downlinks": [
        "string_example"
      ],
      "suggested_esilaglinks": [
        "string_example"
      ],
      "suggested_uplinks": [
        "string_example"
      ],
      "uplinks": [
        "string_example"
      ]
    }
  ]
});
$resp = $client->orgs evpn topologies->updateOrgEvpnTopology($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/evpn_topologies/{evpn_topology_id}`

**Summary:** deleteOrgEvpnTopology

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

