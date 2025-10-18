# Orgs MxTunnels API

## `GET /api/v1/orgs/{org_id}/mxtunnels`

**Summary:** listOrgMxTunnels

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

## `POST /api/v1/orgs/{org_id}/mxtunnels`

**Summary:** createOrgMxTunnel

**Request (raw array example)**

```json
{
  "anchor_mxtunnel_ids": [
    "1e970fec-0a7a-4d73-a472-3ef3b6a456aa"
  ],
  "auto_preemption": {
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "12:00"
  },
  "created_time": 1.23,
  "for_site": true,
  "hello_interval": 123,
  "hello_retries": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "ipsec": {
    "dns_servers": [
      "string_example"
    ],
    "dns_suffix": [
      "string_example"
    ],
    "enabled": true,
    "extra_routes": [
      {
        "dest": "string_example",
        "next_hop": "string_example"
      }
    ],
    "split_tunnel": true,
    "use_mxedge": true
  },
  "modified_time": 1.23,
  "mtu": 123,
  "mxcluster_ids": [
    "string_example"
  ],
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "protocol": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "vlan_ids": [
    123
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Mxtunnel;

$model = new Mxtunnel({
  "anchor_mxtunnel_ids": [
    "1e970fec-0a7a-4d73-a472-3ef3b6a456aa"
  ],
  "auto_preemption": {
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "12:00"
  },
  "created_time": 1.23,
  "for_site": true,
  "hello_interval": 123,
  "hello_retries": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "ipsec": {
    "dns_servers": [
      "string_example"
    ],
    "dns_suffix": [
      "string_example"
    ],
    "enabled": true,
    "extra_routes": [
      {
        "dest": "string_example",
        "next_hop": "string_example"
      }
    ],
    "split_tunnel": true,
    "use_mxedge": true
  },
  "modified_time": 1.23,
  "mtu": 123,
  "mxcluster_ids": [
    "string_example"
  ],
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "protocol": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "vlan_ids": [
    123
  ]
});
$resp = $client->orgs mxtunnels->createOrgMxTunnel($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/mxtunnels/{mxtunnel_id}`

**Summary:** getOrgMxTunnel

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/mxtunnels/{mxtunnel_id}`

**Summary:** updateOrgMxTunnel

**Request (raw array example)**

```json
{
  "anchor_mxtunnel_ids": [
    "1e970fec-0a7a-4d73-a472-3ef3b6a456aa"
  ],
  "auto_preemption": {
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "12:00"
  },
  "created_time": 1.23,
  "for_site": true,
  "hello_interval": 123,
  "hello_retries": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "ipsec": {
    "dns_servers": [
      "string_example"
    ],
    "dns_suffix": [
      "string_example"
    ],
    "enabled": true,
    "extra_routes": [
      {
        "dest": "string_example",
        "next_hop": "string_example"
      }
    ],
    "split_tunnel": true,
    "use_mxedge": true
  },
  "modified_time": 1.23,
  "mtu": 123,
  "mxcluster_ids": [
    "string_example"
  ],
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "protocol": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "vlan_ids": [
    123
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Mxtunnel;

$model = new Mxtunnel({
  "anchor_mxtunnel_ids": [
    "1e970fec-0a7a-4d73-a472-3ef3b6a456aa"
  ],
  "auto_preemption": {
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "12:00"
  },
  "created_time": 1.23,
  "for_site": true,
  "hello_interval": 123,
  "hello_retries": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "ipsec": {
    "dns_servers": [
      "string_example"
    ],
    "dns_suffix": [
      "string_example"
    ],
    "enabled": true,
    "extra_routes": [
      {
        "dest": "string_example",
        "next_hop": "string_example"
      }
    ],
    "split_tunnel": true,
    "use_mxedge": true
  },
  "modified_time": 1.23,
  "mtu": 123,
  "mxcluster_ids": [
    "string_example"
  ],
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "protocol": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "vlan_ids": [
    123
  ]
});
$resp = $client->orgs mxtunnels->updateOrgMxTunnel($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/mxtunnels/{mxtunnel_id}`

**Summary:** deleteOrgMxTunnel

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

