# MSPs Licenses API

## `POST /api/v1/msps/{msp_id}/claim`

**Summary:** claimMspLicense

**Request (raw array example)**

```json
{
  "code": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\CodeString;

$model = new CodeString({
  "code": "string_example"
});
$resp = $client->msps licenses->claimMspLicense($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: Response when the key is invalid (or already used)
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/msps/{msp_id}/licenses`

**Summary:** listMspLicenses

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/msps/{msp_id}/licenses`

**Summary:** moveOrDeleteMspLicenseToAnotherOrg

**Request (raw array example)**

```json
{
  "amendment_id": "string_example",
  "dst_org_id": "string_example",
  "notes": "string_example",
  "op": "string_example",
  "quantity": 1.23,
  "subscription_id": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MspLicenseAction;

$model = new MspLicenseAction({
  "amendment_id": "string_example",
  "dst_org_id": "string_example",
  "notes": "string_example",
  "op": "string_example",
  "quantity": 1.23,
  "subscription_id": "string_example"
});
$resp = $client->msps licenses->moveOrDeleteMspLicenseToAnotherOrg($model->toArray());
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

## `GET /api/v1/msps/{msp_id}/stats/licenses`

**Summary:** listMspOrgLicenses

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

