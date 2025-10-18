# Orgs SecIntel Profiles API

## `GET /api/v1/orgs/{org_id}/secintelprofiles`

**Summary:** listOrgSecIntelProfiles

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/secintelprofiles`

**Summary:** createOrgSecIntelProfile

**Request (raw array example)**

```json
{
  "name": "secintel-custom",
  "profiles": [
    {
      "action": "string_example",
      "category": "string_example"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SecintelProfile;

$model = new SecintelProfile({
  "name": "secintel-custom",
  "profiles": [
    {
      "action": "string_example",
      "category": "string_example"
    }
  ]
});
$resp = $client->orgs secintel profiles->createOrgSecIntelProfile($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/secintelprofiles/{secintelprofile_id}`

**Summary:** getOrgSecIntelProfile

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/secintelprofiles/{secintelprofile_id}`

**Summary:** createOrgSecIntelProfile

**Request (raw array example)**

```json
{
  "name": "secintel-custom",
  "profiles": [
    {
      "action": "string_example",
      "category": "string_example"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SecintelProfile;

$model = new SecintelProfile({
  "name": "secintel-custom",
  "profiles": [
    {
      "action": "string_example",
      "category": "string_example"
    }
  ]
});
$resp = $client->orgs secintel profiles->updateOrgSecIntelProfile($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/secintelprofiles/{secintelprofile_id}`

**Summary:** deleteOrgSecIntelProfile

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

