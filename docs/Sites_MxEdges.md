# Sites MxEdges API

## `GET /api/v1/sites/{site_id}/mxedges`

**Summary:** listSiteMxEdges

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

## `GET /api/v1/sites/{site_id}/mxedges/events/count`

**Summary:** countSiteMxEdgeEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_mxedge_events_count_distinct`||
|`mxedge_id`|query|false|`string`|Mist edge id|
|`mxcluster_id`|query|false|`string`|Mist edge cluster id|
|`None`|None|false|``||
|`service`|query|false|`string`|Service running on mist edge(mxagent, tunterm etc)|
|`None`|None|false|``||
|`None`|None|false|``||
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

## `GET /api/v1/sites/{site_id}/mxedges/events/search`

**Summary:** searchSiteMistEdgeEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mxedge_id`|query|false|`string`|Mist edge id|
|`mxcluster_id`|query|false|`string`|Mist edge cluster id|
|`None`|None|false|``||
|`service`|query|false|`string`|Service running on mist edge(mxagent, tunterm etc)|
|`component`|query|false|`string`|Component like PS1, PS2|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
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

## `GET /api/v1/sites/{site_id}/mxedges/{mxedge_id}`

**Summary:** getSiteMxEdge

**Responses**

- **200**: OK
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/mxedges/{mxedge_id}`

**Summary:** updateSiteMxEdge

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "magic": "L-NpT5gi-ADR8WTFd4EiQPY3cP5WdSoD",
  "model": "ME-100",
  "modified_time": 1.23,
  "mxagent_registered": true,
  "mxcluster_id": "572586b7-f97b-a22b-526c-8b97a3f609c4",
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "name": "Guest",
  "note": "note for mxedge",
  "ntp_servers": [
    "string_example"
  ],
  "oob_ip_config": {
    "autoconf6": true,
    "dhcp6": true,
    "dns": [
      "string_example"
    ],
    "gateway": "10.2.1.254",
    "gateway6": "2601:1700:43c0:dc0::1",
    "ip": "10.2.1.2",
    "ip6": "2601:1700:43c0:dc0:20c:29ff:fea7:93bc",
    "netmask": "255.255.255.0",
    "netmask6": "/64",
    "type": "static",
    "type6": "static"
  },
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "proxy": {
    "url": "https://proxy.corp.com:8080/"
  },
  "services": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tunterm_dhcpd_config": {
    "enabled": true,
    "servers": [
      "string_example"
    ],
    "type": "string_example"
  },
  "tunterm_extra_routes": {},
  "tunterm_igmp_snooping_config": {
    "enabled": true,
    "querier": {
      "max_response_time": 10,
      "mtu": 1500,
      "query_interval": 125,
      "robustness": 123,
      "version": 3
    },
    "vlan_ids": [
      2
    ]
  },
  "tunterm_ip_config": {
    "gateway": "10.2.1.254",
    "gateway6": "2001:1010:1010:1010::1",
    "ip": "10.2.1.1",
    "ip6": "2001:1010:1010:1010::2",
    "netmask": "255.255.255.0",
    "netmask6": "/64"
  },
  "tunterm_monitoring": [
    [
      {
        "host": "10.2.8.15",
        "port": 80,
        "protocol": "tcp",
        "src_vlan_id": 5,
        "timeout": 300
      }
    ]
  ],
  "tunterm_multicast_config": {
    "mdns": {
      "enabled": true,
      "vlan_ids": [
        "string_example"
      ]
    },
    "ssdp": {
      "enabled": true,
      "vlan_ids": [
        "string_example"
      ]
    }
  },
  "tunterm_other_ip_configs": {},
  "tunterm_port_config": {
    "downstream_ports": [
      "string_example"
    ],
    "separate_upstream_downstream": true,
    "upstream_port_vlan_id": 30,
    "upstream_ports": [
      "string_example"
    ]
  },
  "tunterm_registered": true,
  "tunterm_switch_config": {
    "enabled": true
  },
  "versions": {
    "mxagent": "string_example",
    "tunterm": "string_example"
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Mxedge;

$model = new Mxedge({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "magic": "L-NpT5gi-ADR8WTFd4EiQPY3cP5WdSoD",
  "model": "ME-100",
  "modified_time": 1.23,
  "mxagent_registered": true,
  "mxcluster_id": "572586b7-f97b-a22b-526c-8b97a3f609c4",
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "name": "Guest",
  "note": "note for mxedge",
  "ntp_servers": [
    "string_example"
  ],
  "oob_ip_config": {
    "autoconf6": true,
    "dhcp6": true,
    "dns": [
      "string_example"
    ],
    "gateway": "10.2.1.254",
    "gateway6": "2601:1700:43c0:dc0::1",
    "ip": "10.2.1.2",
    "ip6": "2601:1700:43c0:dc0:20c:29ff:fea7:93bc",
    "netmask": "255.255.255.0",
    "netmask6": "/64",
    "type": "static",
    "type6": "static"
  },
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "proxy": {
    "url": "https://proxy.corp.com:8080/"
  },
  "services": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tunterm_dhcpd_config": {
    "enabled": true,
    "servers": [
      "string_example"
    ],
    "type": "string_example"
  },
  "tunterm_extra_routes": {},
  "tunterm_igmp_snooping_config": {
    "enabled": true,
    "querier": {
      "max_response_time": 10,
      "mtu": 1500,
      "query_interval": 125,
      "robustness": 123,
      "version": 3
    },
    "vlan_ids": [
      2
    ]
  },
  "tunterm_ip_config": {
    "gateway": "10.2.1.254",
    "gateway6": "2001:1010:1010:1010::1",
    "ip": "10.2.1.1",
    "ip6": "2001:1010:1010:1010::2",
    "netmask": "255.255.255.0",
    "netmask6": "/64"
  },
  "tunterm_monitoring": [
    [
      {
        "host": "10.2.8.15",
        "port": 80,
        "protocol": "tcp",
        "src_vlan_id": 5,
        "timeout": 300
      }
    ]
  ],
  "tunterm_multicast_config": {
    "mdns": {
      "enabled": true,
      "vlan_ids": [
        "string_example"
      ]
    },
    "ssdp": {
      "enabled": true,
      "vlan_ids": [
        "string_example"
      ]
    }
  },
  "tunterm_other_ip_configs": {},
  "tunterm_port_config": {
    "downstream_ports": [
      "string_example"
    ],
    "separate_upstream_downstream": true,
    "upstream_port_vlan_id": 30,
    "upstream_ports": [
      "string_example"
    ]
  },
  "tunterm_registered": true,
  "tunterm_switch_config": {
    "enabled": true
  },
  "versions": {
    "mxagent": "string_example",
    "tunterm": "string_example"
  }
});
$resp = $client->sites mxedges->updateSiteMxEdge($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/mxedges/{mxedge_id}`

**Summary:** deleteSiteMxEdge

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/mxedges/{mxedge_id}/support`

**Summary:** uploadSiteMxEdgeSupportFiles

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

