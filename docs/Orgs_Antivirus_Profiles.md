# Orgs Antivirus Profiles API

## `GET /api/v1/orgs/{org_id}/avprofiles`

**Summary:** listOrgAntivirusProfiles

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

## `POST /api/v1/orgs/{org_id}/avprofiles`

**Summary:** createOrgAntivirusProfile

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "fallback_action": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_filesize": 123,
  "mime_whitelist": [
    "string_example"
  ],
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "protocols": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "url_whitelist": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Avprofile;

$model = new Avprofile({
  "created_time": 1.23,
  "fallback_action": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_filesize": 123,
  "mime_whitelist": [
    "string_example"
  ],
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "protocols": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "url_whitelist": [
    "string_example"
  ]
});
$resp = $client->orgs antivirus profiles->createOrgAntivirusProfile($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/avprofiles/{avprofile_id}`

**Summary:** getOrgAntivirusProfile

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/avprofiles/{avprofile_id}`

**Summary:** updateOrgAntivirusProfile

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "fallback_action": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_filesize": 123,
  "mime_whitelist": [
    "string_example"
  ],
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "protocols": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "url_whitelist": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Avprofile;

$model = new Avprofile({
  "created_time": 1.23,
  "fallback_action": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_filesize": 123,
  "mime_whitelist": [
    "string_example"
  ],
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "protocols": [
    "string_example"
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "url_whitelist": [
    "string_example"
  ]
});
$resp = $client->orgs antivirus profiles->updateOrgAntivirusProfile($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/avprofiles/{avprofile_id}`

**Summary:** Delete Org Antivirus Profile

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

