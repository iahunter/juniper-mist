# Orgs WLAN Templates API

## `GET /api/v1/orgs/{org_id}/templates`

**Summary:** listOrgTemplates

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

## `POST /api/v1/orgs/{org_id}/templates`

**Summary:** createOrgTemplate

**Request (raw array example)**

```json
{
  "applies": {
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "created_time": 1.23,
  "deviceprofile_ids": [
    "string_example"
  ],
  "exceptions": {
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "filter_by_deviceprofile": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Template;

$model = new Template({
  "applies": {
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "created_time": 1.23,
  "deviceprofile_ids": [
    "string_example"
  ],
  "exceptions": {
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "filter_by_deviceprofile": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61"
});
$resp = $client->orgs wlan templates->createOrgTemplate($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/templates/{template_id}`

**Summary:** getOrgTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/templates/{template_id}`

**Summary:** updateOrgTemplate

**Request (raw array example)**

```json
{
  "applies": {
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "created_time": 1.23,
  "deviceprofile_ids": [
    "string_example"
  ],
  "exceptions": {
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "filter_by_deviceprofile": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Template;

$model = new Template({
  "applies": {
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "created_time": 1.23,
  "deviceprofile_ids": [
    "string_example"
  ],
  "exceptions": {
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "filter_by_deviceprofile": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61"
});
$resp = $client->orgs wlan templates->updateOrgTemplate($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/templates/{template_id}`

**Summary:** deleteOrgTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/templates/{template_id}/clone`

**Summary:** cloneOrgTemplate

**Request (raw array example)**

```json
{
  "name": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NameString;

$model = new NameString({
  "name": "string_example"
});
$resp = $client->orgs wlan templates->cloneOrgTemplate($model->toArray());
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

