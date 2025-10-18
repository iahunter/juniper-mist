# MSPs API

## `POST /api/v1/msps`

**Summary:** createMsp

**Request (raw array example)**

```json
{
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "logo_url": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "tier": "string_example",
  "url": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Msp;

$model = new Msp({
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "logo_url": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "tier": "string_example",
  "url": "string_example"
});
$resp = $client->msps->createMsp($model->toArray());
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

## `GET /api/v1/msps/{msp_id}`

**Summary:** getMspDetails

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/msps/{msp_id}`

**Summary:** updateMsp

**Request (raw array example)**

```json
{
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "logo_url": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "tier": "string_example",
  "url": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Msp;

$model = new Msp({
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "logo_url": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "tier": "string_example",
  "url": "string_example"
});
$resp = $client->msps->updateMsp($model->toArray());
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

## `DELETE /api/v1/msps/{msp_id}`

**Summary:** deleteMsp

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/msps/{msp_id}/search`

**Summary:** searchMspOrgGroup

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|true|`#/components/schemas/msp_search_type`|Orgs|
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

