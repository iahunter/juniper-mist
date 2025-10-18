# MSPs Orgs API

## `GET /api/v1/msps/{msp_id}/orgs`

**Summary:** listMspOrgs

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/msps/{msp_id}/orgs`

**Summary:** createMspOrg

**Request (raw array example)**

```json
{
  "alarmtemplate_id": "string_example",
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "msp_logo_url": "https://example.com/logo/b9d42c2e-88ee-41f8-b798-f009ce7fe909.jpeg",
  "msp_name": "MSP",
  "name": "Org",
  "orggroup_ids": [
    "string_example"
  ],
  "session_expiry": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Org;

$model = new Org({
  "alarmtemplate_id": "string_example",
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "msp_logo_url": "https://example.com/logo/b9d42c2e-88ee-41f8-b798-f009ce7fe909.jpeg",
  "msp_name": "MSP",
  "name": "Org",
  "orggroup_ids": [
    "string_example"
  ],
  "session_expiry": 123
});
$resp = $client->msps orgs->createMspOrg($model->toArray());
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

## `PUT /api/v1/msps/{msp_id}/orgs`

**Summary:** manageMspOrgs

**Request (raw array example)**

```json
{
  "op": "string_example",
  "org_ids": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MspOrgChange;

$model = new MspOrgChange({
  "op": "string_example",
  "org_ids": [
    "string_example"
  ]
});
$resp = $client->msps orgs->manageMspOrgs($model->toArray());
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

## `GET /api/v1/msps/{msp_id}/orgs/search`

**Summary:** searchMspOrgs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`org_id`|query|false|`string`|Org id|
|`sub_insufficient`|query|false|`boolean`|If this org has sufficient subscription|
|`trial_enabled`|query|false|`boolean`|If this org is under trial period|
|`usage_types`|query|false|`#/components/schemas/strings`|List of types that enabled by usage|
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

## `GET /api/v1/msps/{msp_id}/orgs/{org_id}`

**Summary:** getMspOrg

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/msps/{msp_id}/orgs/{org_id}`

**Summary:** updateMspOrg

**Request (raw array example)**

```json
{
  "alarmtemplate_id": "string_example",
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "msp_logo_url": "https://example.com/logo/b9d42c2e-88ee-41f8-b798-f009ce7fe909.jpeg",
  "msp_name": "MSP",
  "name": "Org",
  "orggroup_ids": [
    "string_example"
  ],
  "session_expiry": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Org;

$model = new Org({
  "alarmtemplate_id": "string_example",
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "msp_logo_url": "https://example.com/logo/b9d42c2e-88ee-41f8-b798-f009ce7fe909.jpeg",
  "msp_name": "MSP",
  "name": "Org",
  "orggroup_ids": [
    "string_example"
  ],
  "session_expiry": 123
});
$resp = $client->msps orgs->updateMspOrg($model->toArray());
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

## `DELETE /api/v1/msps/{msp_id}/orgs/{org_id}`

**Summary:** deleteMspOrg

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/msps/{msp_id}/stats/orgs`

**Summary:** listMspOrgStats

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

