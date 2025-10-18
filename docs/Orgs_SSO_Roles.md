# Orgs SSO Roles API

## `GET /api/v1/orgs/{org_id}/ssoroles`

**Summary:** listOrgSsoRoles

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

## `POST /api/v1/orgs/{org_id}/ssoroles`

**Summary:** createOrgSsoRole

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "privileges": [
    {
      "org_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "site_id": "string_example",
      "sitegroup_id": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SsoRoleOrg;

$model = new SsoRoleOrg({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "privileges": [
    {
      "org_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "site_id": "string_example",
      "sitegroup_id": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->orgs sso roles->createOrgSsoRole($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/ssoroles/{ssorole_id}`

**Summary:** getOrgSsoRole

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/ssoroles/{ssorole_id}`

**Summary:** updateOrgSsoRole

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "privileges": [
    {
      "org_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "site_id": "string_example",
      "sitegroup_id": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SsoRoleOrg;

$model = new SsoRoleOrg({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "privileges": [
    {
      "org_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "site_id": "string_example",
      "sitegroup_id": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->orgs sso roles->updateOrgSsoRole($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/ssoroles/{ssorole_id}`

**Summary:** deleteOrgSsoRole

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

