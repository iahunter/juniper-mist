# Orgs MxEdges API

## `GET /api/v1/orgs/{org_id}/mxedges`

**Summary:** listOrgMxEdges

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`for_site`|query|false|`#/components/schemas/mxedge_for_site`|Filter for org/site level mist edges|
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

## `POST /api/v1/orgs/{org_id}/mxedges`

**Summary:** createOrgMxEdge

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
$resp = $client->orgs mxedges->createOrgMxEdge($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/mxedges/assign`

**Summary:** assignOrgMxEdgeToSite

**Request (raw array example)**

```json
{
  "mxedge_ids": [
    "string_example"
  ],
  "site_id": "43e9c864-a7e4-4310-8031-d9817d2c5a43"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MxedgesAssign;

$model = new MxedgesAssign({
  "mxedge_ids": [
    "string_example"
  ],
  "site_id": "43e9c864-a7e4-4310-8031-d9817d2c5a43"
});
$resp = $client->orgs mxedges->assignOrgMxEdgeToSite($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/mxedges/claim`

**Summary:** claimOrgMxEdge

**Request (raw array example)**

```json
{
  "code": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\CodeString;

$model = new CodeString({
  "code": "string_example"
});
$resp = $client->orgs mxedges->claimOrgMxEdge($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/mxedges/count`

**Summary:** countOrgMxEdges

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_mxedge_count_distinct`||
|`mxedge_id`|query|false|`string`|Mist edge id|
|`site_id`|query|false|`string`|Mist edge site id|
|`mxcluster_id`|query|false|`string`|Mist edge cluster id|
|`model`|query|false|`string`|Model name|
|`distro`|query|false|`string`|Debian code name (buster, bullseye)|
|`tunterm_version`|query|false|`string`|tunterm version|
|`sort`|query|false|`string`|Sort options, -prefix represents DESC order, default is -last_seen|
|`stats`|query|false|`boolean`|Whether to return device stats, default is false|
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

## `GET /api/v1/orgs/{org_id}/mxedges/events/count`

**Summary:** countOrgSiteMxEdgeEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_mxedge_events_count_distinct`||
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

## `GET /api/v1/orgs/{org_id}/mxedges/events/search`

**Summary:** searchOrgMistEdgeEvents

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

## `GET /api/v1/orgs/{org_id}/mxedges/search`

**Summary:** searchOrgMxEdges

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mxedge_id`|query|false|`string`|Mist edge id|
|`site_id`|query|false|`string`|Mist edge site id|
|`mxcluster_id`|query|false|`string`|Mist edge cluster id|
|`model`|query|false|`string`|Model name|
|`distro`|query|false|`string`|Debian code name (buster, bullseye)|
|`tunterm_version`|query|false|`string`|tunterm version|
|`stats`|query|false|`boolean`|Whether to return device stats, default is false|
|`None`|None|false|``||
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

## `POST /api/v1/orgs/{org_id}/mxedges/unassign`

**Summary:** unassignOrgMxEdgeFromSite

**Request (raw array example)**

```json
{
  "mxedge_ids": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MxedgesUnassign;

$model = new MxedgesUnassign({
  "mxedge_ids": [
    "string_example"
  ]
});
$resp = $client->orgs mxedges->unassignOrgMxEdgeFromSite($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/mxedges/version`

**Summary:** getOrgMxEdgeUpgradeInfo

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`channel`|query|false|`#/components/schemas/get_org_mxedge_upgrade_info_channel`|Upgrade channel to follow, stable (default) / beta / alpha|
|`distro`|query|false|`string`|Distro code name (e.g. `buster`, `bullseye`, ...)|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/mxedges/{mxedge_id}`

**Summary:** getOrgMxEdge

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/mxedges/{mxedge_id}`

**Summary:** updateOrgMxEdge

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
$resp = $client->orgs mxedges->updateOrgMxEdge($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/mxedges/{mxedge_id}`

**Summary:** deleteOrgMxEdge

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/mxedges/{mxedge_id}/image/{image_number}`

**Summary:** addOrgMxEdgeImage

**Request (raw array example)**

```json
{
  "file": "string_example",
  "json": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ImageImport;

$model = new ImageImport({
  "file": "string_example",
  "json": "string_example"
});
$resp = $client->orgs mxedges->addOrgMxEdgeImage($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/mxedges/{mxedge_id}/image/{image_number}`

**Summary:** deleteOrgMxEdgeImage

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/mxedges/{mxedge_id}/restart`

**Summary:** restartOrgMxEdge

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/mxedges/{mxedge_id}/services/tunterm/bounce_port`

**Summary:** bounceOrgMxEdgeDataPorts

**Request (raw array example)**

```json
{
  "hold_time": 123,
  "ports": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsTuntermBouncePort;

$model = new UtilsTuntermBouncePort({
  "hold_time": 123,
  "ports": [
    "string_example"
  ]
});
$resp = $client->orgs mxedges->bounceOrgMxEdgeDataPorts($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/mxedges/{mxedge_id}/services/tunterm/disconnect_aps`

**Summary:** disconnectOrgMxEdgeTuntermAps

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
$resp = $client->orgs mxedges->disconnectOrgMxEdgeTuntermAps($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/mxedges/{mxedge_id}/services/{name}/{action}`

**Summary:** controlOrgMxEdgeServices

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/mxedges/{mxedge_id}/support`

**Summary:** uploadOrgMxEdgeSupportFiles

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/mxedges/{mxedge_id}/unregister`

**Summary:** unregisterOrgMxEdge

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

