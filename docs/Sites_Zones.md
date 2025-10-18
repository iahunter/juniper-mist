# Sites Zones API

## `GET /api/v1/sites/{site_id}/zones`

**Summary:** listSiteZones

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

## `POST /api/v1/sites/{site_id}/zones`

**Summary:** createSiteZone

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "vertices": [
    {
      "x": 1.23,
      "y": 1.23
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Zone;

$model = new Zone({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "vertices": [
    {
      "x": 1.23,
      "y": 1.23
    }
  ]
});
$resp = $client->sites zones->createSiteZone($model->toArray());
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

## `GET /api/v1/sites/{site_id}/zones/{zone_id}`

**Summary:** getSiteZone

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/zones/{zone_id}`

**Summary:** updateSiteZone

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "vertices": [
    {
      "x": 1.23,
      "y": 1.23
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Zone;

$model = new Zone({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "vertices": [
    {
      "x": 1.23,
      "y": 1.23
    }
  ]
});
$resp = $client->sites zones->updateSiteZone($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/zones/{zone_id}`

**Summary:** deleteSiteZone

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/{zone_type}/count`

**Summary:** countSiteZoneSessions

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_zone_count_distinct`||
|`user_type`|query|false|`#/components/schemas/rf_client_type`|User type|
|`user`|query|false|`string`|Client MAC / Asset MAC / SDK UUID|
|`scope_id`|query|false|`string`|If `scope`==`map`/`zone`/`rssizone`, the scope id|
|`scope`|query|false|`#/components/schemas/zone_scope`|Scope|
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

## `GET /api/v1/sites/{site_id}/{zone_type}/visits/search`

**Summary:** searchSiteZoneSessions

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`user_type`|query|false|`#/components/schemas/rf_client_type`|User type, client (default) / sdkclient / asset|
|`user`|query|false|`string`|Client MAC / Asset MAC / SDK UUID|
|`scope_id`|query|false|`string`|If `scope`==`map`/`zone`/`rssizone`, the scope id|
|`scope`|query|false|`#/components/schemas/visits_scope`|Scope|
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

