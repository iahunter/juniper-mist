# Orgs Networks API

## `GET /api/v1/orgs/{org_id}/networks`

**Summary:** listOrgNetworks

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

## `POST /api/v1/orgs/{org_id}/networks`

**Summary:** createOrgNetwork

**Request (raw array example)**

```json
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
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Network;

$model = new Network({
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
});
$resp = $client->orgs networks->createOrgNetwork($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/networks/{network_id}`

**Summary:** getOrgNetwork

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/networks/{network_id}`

**Summary:** updateOrgNetwork

**Request (raw array example)**

```json
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
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Network;

$model = new Network({
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
});
$resp = $client->orgs networks->updateOrgNetwork($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/networks/{network_id}`

**Summary:** deleteOrgNetwork

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

