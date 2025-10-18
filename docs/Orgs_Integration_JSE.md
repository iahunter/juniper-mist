# Orgs Integration JSE API

## `GET /api/v1/orgs/{org_id}/setting/jse/info`

**Summary:** getOrgJseInfo

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/setting/jse/setup`

**Summary:** getOrgJseIntegration

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/jse/setup`

**Summary:** setupOrgJseIntegration

**Request (raw array example)**

```json
{
  "cloud_name": "devcentral.juniperclouds.net",
  "password": "foryoureyesonly",
  "username": "john@abc.com"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AccountJseConfig;

$model = new AccountJseConfig({
  "cloud_name": "devcentral.juniperclouds.net",
  "password": "foryoureyesonly",
  "username": "john@abc.com"
});
$resp = $client->orgs integration jse->setupOrgJseIntegration($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/setting/jse/setup`

**Summary:** deleteOrgJseIntegration

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

