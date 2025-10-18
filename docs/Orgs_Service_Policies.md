# Orgs Service Policies API

## `GET /api/v1/orgs/{org_id}/servicepolicies`

**Summary:** listOrgServicePolicies

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

## `POST /api/v1/orgs/{org_id}/servicepolicies`

**Summary:** createOrgServicePolicy

**Request (raw array example)**

```json
{
  "aamw": {
    "aamwprofile_id": "string_example",
    "enabled": true,
    "profile": "string_example"
  },
  "action": "string_example",
  "antivirus": {
    "avprofile_id": "string_example",
    "enabled": true,
    "profile": "string_example"
  },
  "appqoe": {
    "enabled": true
  },
  "created_time": 1.23,
  "ewf": [
    {
      "alert_only": true,
      "block_message": "Access to this URL Category has been blocked",
      "enabled": true,
      "profile": "string_example"
    }
  ],
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "idp": {
    "alert_only": true,
    "enabled": true,
    "idpprofile_id": "89b9d208-84a4-fa8f-af57-78f92c639cf2",
    "profile": "string_example"
  },
  "local_routing": true,
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "path_preference": "string_example",
  "secintel": {
    "enabled": true,
    "profile": "string_example",
    "secintelprofile_id": "string_example"
  },
  "services": [
    "string_example"
  ],
  "ssl_proxy": {
    "ciphers_category": "string_example",
    "enabled": true
  },
  "tenants": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgServicePolicy;

$model = new OrgServicePolicy({
  "aamw": {
    "aamwprofile_id": "string_example",
    "enabled": true,
    "profile": "string_example"
  },
  "action": "string_example",
  "antivirus": {
    "avprofile_id": "string_example",
    "enabled": true,
    "profile": "string_example"
  },
  "appqoe": {
    "enabled": true
  },
  "created_time": 1.23,
  "ewf": [
    {
      "alert_only": true,
      "block_message": "Access to this URL Category has been blocked",
      "enabled": true,
      "profile": "string_example"
    }
  ],
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "idp": {
    "alert_only": true,
    "enabled": true,
    "idpprofile_id": "89b9d208-84a4-fa8f-af57-78f92c639cf2",
    "profile": "string_example"
  },
  "local_routing": true,
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "path_preference": "string_example",
  "secintel": {
    "enabled": true,
    "profile": "string_example",
    "secintelprofile_id": "string_example"
  },
  "services": [
    "string_example"
  ],
  "ssl_proxy": {
    "ciphers_category": "string_example",
    "enabled": true
  },
  "tenants": [
    "string_example"
  ]
});
$resp = $client->orgs service policies->createOrgServicePolicy($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/servicepolicies/{servicepolicy_id}`

**Summary:** getOrgServicePolicy

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/servicepolicies/{servicepolicy_id}`

**Summary:** updateOrgServicePolicy

**Request (raw array example)**

```json
{
  "aamw": {
    "aamwprofile_id": "string_example",
    "enabled": true,
    "profile": "string_example"
  },
  "action": "string_example",
  "antivirus": {
    "avprofile_id": "string_example",
    "enabled": true,
    "profile": "string_example"
  },
  "appqoe": {
    "enabled": true
  },
  "created_time": 1.23,
  "ewf": [
    {
      "alert_only": true,
      "block_message": "Access to this URL Category has been blocked",
      "enabled": true,
      "profile": "string_example"
    }
  ],
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "idp": {
    "alert_only": true,
    "enabled": true,
    "idpprofile_id": "89b9d208-84a4-fa8f-af57-78f92c639cf2",
    "profile": "string_example"
  },
  "local_routing": true,
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "path_preference": "string_example",
  "secintel": {
    "enabled": true,
    "profile": "string_example",
    "secintelprofile_id": "string_example"
  },
  "services": [
    "string_example"
  ],
  "ssl_proxy": {
    "ciphers_category": "string_example",
    "enabled": true
  },
  "tenants": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgServicePolicy;

$model = new OrgServicePolicy({
  "aamw": {
    "aamwprofile_id": "string_example",
    "enabled": true,
    "profile": "string_example"
  },
  "action": "string_example",
  "antivirus": {
    "avprofile_id": "string_example",
    "enabled": true,
    "profile": "string_example"
  },
  "appqoe": {
    "enabled": true
  },
  "created_time": 1.23,
  "ewf": [
    {
      "alert_only": true,
      "block_message": "Access to this URL Category has been blocked",
      "enabled": true,
      "profile": "string_example"
    }
  ],
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "idp": {
    "alert_only": true,
    "enabled": true,
    "idpprofile_id": "89b9d208-84a4-fa8f-af57-78f92c639cf2",
    "profile": "string_example"
  },
  "local_routing": true,
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "path_preference": "string_example",
  "secintel": {
    "enabled": true,
    "profile": "string_example",
    "secintelprofile_id": "string_example"
  },
  "services": [
    "string_example"
  ],
  "ssl_proxy": {
    "ciphers_category": "string_example",
    "enabled": true
  },
  "tenants": [
    "string_example"
  ]
});
$resp = $client->orgs service policies->updateOrgServicePolicy($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/servicepolicies/{servicepolicy_id}`

**Summary:** deleteOrgServicePolicy

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

