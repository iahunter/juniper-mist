# Orgs IDP Profiles API

## `GET /api/v1/orgs/{org_id}/idpprofiles`

**Summary:** listOrgIdpProfiles

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

## `POST /api/v1/orgs/{org_id}/idpprofiles`

**Summary:** createOrgIdpProfile

**Request (raw array example)**

```json
{
  "base_profile": "strict",
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "relaxed",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "overwrites": [
    {
      "action": "alert",
      "matching": {
        "attack_name": [
          "HTTP:INVALID:HDR-FIELD"
        ],
        "dst_subnet": [
          "63.1.2.0/24"
        ],
        "severity": [
          "major"
        ]
      },
      "name": "string_example"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\IdpProfile;

$model = new IdpProfile({
  "base_profile": "strict",
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "relaxed",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "overwrites": [
    {
      "action": "alert",
      "matching": {
        "attack_name": [
          "HTTP:INVALID:HDR-FIELD"
        ],
        "dst_subnet": [
          "63.1.2.0/24"
        ],
        "severity": [
          "major"
        ]
      },
      "name": "string_example"
    }
  ]
});
$resp = $client->orgs idp profiles->createOrgIdpProfile($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/idpprofiles/{idpprofile_id}`

**Summary:** getOrgIdpProfile

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/idpprofiles/{idpprofile_id}`

**Summary:** updateOrgIdpProfile

**Request (raw array example)**

```json
{
  "base_profile": "strict",
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "relaxed",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "overwrites": [
    {
      "action": "alert",
      "matching": {
        "attack_name": [
          "HTTP:INVALID:HDR-FIELD"
        ],
        "dst_subnet": [
          "63.1.2.0/24"
        ],
        "severity": [
          "major"
        ]
      },
      "name": "string_example"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\IdpProfile;

$model = new IdpProfile({
  "base_profile": "strict",
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "relaxed",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "overwrites": [
    {
      "action": "alert",
      "matching": {
        "attack_name": [
          "HTTP:INVALID:HDR-FIELD"
        ],
        "dst_subnet": [
          "63.1.2.0/24"
        ],
        "severity": [
          "major"
        ]
      },
      "name": "string_example"
    }
  ]
});
$resp = $client->orgs idp profiles->updateOrgIdpProfile($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/idpprofiles/{idpprofile_id}`

**Summary:** deleteOrgIdpProfile

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

