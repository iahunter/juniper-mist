# MSPs SSO Roles API

## `GET /api/v1/msps/{msp_id}/ssoroles`

**Summary:** listMspSsoRoles

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/msps/{msp_id}/ssoroles`

**Summary:** createMspSsoRole

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
      "org_name": "string_example",
      "orggroup_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
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
use Iahunter\JuniperMist\Models\SsoRoleMsp;

$model = new SsoRoleMsp({
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
      "org_name": "string_example",
      "orggroup_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->msps sso roles->createMspSsoRole($model->toArray());
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

## `PUT /api/v1/msps/{msp_id}/ssoroles/{ssorole_id}`

**Summary:** updateMspSsoRole

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
      "org_name": "string_example",
      "orggroup_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
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
use Iahunter\JuniperMist\Models\SsoRoleMsp;

$model = new SsoRoleMsp({
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
      "org_name": "string_example",
      "orggroup_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->msps sso roles->updateMspSsoRole($model->toArray());
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

## `DELETE /api/v1/msps/{msp_id}/ssoroles/{ssorole_id}`

**Summary:** deleteMspSsoRole

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

