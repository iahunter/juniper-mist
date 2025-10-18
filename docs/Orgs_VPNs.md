# Orgs VPNs API

## `GET /api/v1/orgs/{org_id}/vpns`

**Summary:** listOrgVpns

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

## `POST /api/v1/orgs/{org_id}/vpns`

**Summary:** createOrgVpn

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "path_selection": {
    "strategy": "string_example"
  },
  "paths": {},
  "type": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Vpn;

$model = new Vpn({
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "path_selection": {
    "strategy": "string_example"
  },
  "paths": {},
  "type": "string_example"
});
$resp = $client->orgs vpns->createOrgVpn($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/vpns/{vpn_id}`

**Summary:** getOrgVpn

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/vpns/{vpn_id}`

**Summary:** updateOrgVpn

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "path_selection": {
    "strategy": "string_example"
  },
  "paths": {},
  "type": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Vpn;

$model = new Vpn({
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "path_selection": {
    "strategy": "string_example"
  },
  "paths": {},
  "type": "string_example"
});
$resp = $client->orgs vpns->updateOrgVpn($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/vpns/{vpn_id}`

**Summary:** deleteOrgVpn

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

