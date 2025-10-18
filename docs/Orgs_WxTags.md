# Orgs WxTags API

## `GET /api/v1/orgs/{org_id}/wxtags`

**Summary:** listOrgWxTags

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

## `POST /api/v1/orgs/{org_id}/wxtags`

**Summary:** createOrgWxTag

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "last_ips": [
    "string_example"
  ],
  "mac": "string_example",
  "match": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "op": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "resource_mac": "string_example",
  "services": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "specs": [
    {
      "port_range": "string_example",
      "protocol": "string_example",
      "subnets": [
        "string_example"
      ]
    }
  ],
  "subnet": "string_example",
  "type": "string_example",
  "values": [
    "string_example"
  ],
  "vlan_id": null
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WxlanTag;

$model = new WxlanTag({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "last_ips": [
    "string_example"
  ],
  "mac": "string_example",
  "match": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "op": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "resource_mac": "string_example",
  "services": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "specs": [
    {
      "port_range": "string_example",
      "protocol": "string_example",
      "subnets": [
        "string_example"
      ]
    }
  ],
  "subnet": "string_example",
  "type": "string_example",
  "values": [
    "string_example"
  ],
  "vlan_id": null
});
$resp = $client->orgs wxtags->createOrgWxTag($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/wxtags/apps`

**Summary:** getOrgApplicationList

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/wxtags/{wxtag_id}`

**Summary:** getOrgWxTag

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/wxtags/{wxtag_id}`

**Summary:** updateOrgWxTag

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "last_ips": [
    "string_example"
  ],
  "mac": "string_example",
  "match": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "op": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "resource_mac": "string_example",
  "services": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "specs": [
    {
      "port_range": "string_example",
      "protocol": "string_example",
      "subnets": [
        "string_example"
      ]
    }
  ],
  "subnet": "string_example",
  "type": "string_example",
  "values": [
    "string_example"
  ],
  "vlan_id": null
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WxlanTag;

$model = new WxlanTag({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "last_ips": [
    "string_example"
  ],
  "mac": "string_example",
  "match": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "op": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "resource_mac": "string_example",
  "services": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "specs": [
    {
      "port_range": "string_example",
      "protocol": "string_example",
      "subnets": [
        "string_example"
      ]
    }
  ],
  "subnet": "string_example",
  "type": "string_example",
  "values": [
    "string_example"
  ],
  "vlan_id": null
});
$resp = $client->orgs wxtags->updateOrgWxTag($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/wxtags/{wxtag_id}`

**Summary:** deleteOrgWxTag

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/wxtags/{wxtag_id}/clients`

**Summary:** getOrgCurrentMatchingClientsOfAWxTag

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

