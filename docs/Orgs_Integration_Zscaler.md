# Orgs Integration Zscaler API

## `GET /api/v1/orgs/{org_id}/setting/zscaler/setup`

**Summary:** getOrgZscalerIntegration

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/zscaler/setup`

**Summary:** setupOrgZscalerIntegration

**Request (raw array example)**

```json
{
  "cloud_name": "zscalerbeta.net",
  "partner_key": "K35vrZcK3JvrZc",
  "password": "password",
  "username": "john@nmo.com"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AccountZscalerConfig;

$model = new AccountZscalerConfig({
  "cloud_name": "zscalerbeta.net",
  "partner_key": "K35vrZcK3JvrZc",
  "password": "password",
  "username": "john@nmo.com"
});
$resp = $client->orgs integration zscaler->setupOrgZscalerIntegration($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/setting/zscaler/setup`

**Summary:** deleteOrgZscalerIntegration

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

