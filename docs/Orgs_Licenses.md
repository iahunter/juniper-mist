# Orgs Licenses API

## `POST /api/v1/orgs/{org_id}/claim`

**Summary:** claimOrgLicense

**Request (raw array example)**

```json
{
  "async": true,
  "code": "string_example",
  "device_type": "string_example",
  "type": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ClaimActivation;

$model = new ClaimActivation({
  "async": true,
  "code": "string_example",
  "device_type": "string_example",
  "type": "string_example"
});
$resp = $client->orgs licenses->claimOrgLicense($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: Invalid key (or already used)
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/claim/status`

**Summary:** GetOrgLicenseAsyncClaimStatus

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`detail`|query|false|`boolean`|Request license details|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/licenses`

**Summary:** getOrgLicensesSummary

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/licenses`

**Summary:** moveOrDeleteOrgLicenseToAnotherOrg

**Request (raw array example)**

```json
{
  "amendment_id": "string_example",
  "dst_org_id": "string_example",
  "notes": "string_example",
  "op": "string_example",
  "quantity": 123,
  "subscription_id": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgLicenseAction;

$model = new OrgLicenseAction({
  "amendment_id": "string_example",
  "dst_org_id": "string_example",
  "notes": "string_example",
  "op": "string_example",
  "quantity": 123,
  "subscription_id": "string_example"
});
$resp = $client->orgs licenses->moveOrDeleteOrgLicenseToAnotherOrg($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/licenses/usages`

**Summary:** getOrgLicensesBySite

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

