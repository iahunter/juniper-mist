# Orgs Integration Cradlepoint API

## `GET /api/v1/orgs/{org_id}/setting/cradlepoint/setup`

**Summary:** testOrgCradlepointConnection

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/cradlepoint/setup`

**Summary:** setupOrgCradlepointConnectionToMist

**Request (raw array example)**

```json
{
  "cp_api_id": "84446d61-2206-4ea5-855a-0043f980be54",
  "cp_api_key": "79c329da9893e34099c7d8ad5cb9c941",
  "ecm_api_id": "73446d61-2206-4ea5-855a-0043f980be62",
  "ecm_api_key": "68b329da9893e34099c7d8ad5cb9c9405",
  "enable_lldp": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AccountCradlepointConfig;

$model = new AccountCradlepointConfig({
  "cp_api_id": "84446d61-2206-4ea5-855a-0043f980be54",
  "cp_api_key": "79c329da9893e34099c7d8ad5cb9c941",
  "ecm_api_id": "73446d61-2206-4ea5-855a-0043f980be62",
  "ecm_api_key": "68b329da9893e34099c7d8ad5cb9c9405",
  "enable_lldp": true
});
$resp = $client->orgs integration cradlepoint->setupOrgCradlepointConnectionToMist($model->toArray());
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

## `PUT /api/v1/orgs/{org_id}/setting/cradlepoint/setup`

**Summary:** updateOrgCradlepointConnectionToMist

**Request (raw array example)**

```json
{
  "cp_api_id": "84446d61-2206-4ea5-855a-0043f980be54",
  "cp_api_key": "79c329da9893e34099c7d8ad5cb9c941",
  "ecm_api_id": "73446d61-2206-4ea5-855a-0043f980be62",
  "ecm_api_key": "68b329da9893e34099c7d8ad5cb9c9405",
  "enable_lldp": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AccountCradlepointConfig;

$model = new AccountCradlepointConfig({
  "cp_api_id": "84446d61-2206-4ea5-855a-0043f980be54",
  "cp_api_key": "79c329da9893e34099c7d8ad5cb9c941",
  "ecm_api_id": "73446d61-2206-4ea5-855a-0043f980be62",
  "ecm_api_key": "68b329da9893e34099c7d8ad5cb9c9405",
  "enable_lldp": true
});
$resp = $client->orgs integration cradlepoint->updateOrgCradlepointConnectionToMist($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/setting/cradlepoint/setup`

**Summary:** deleteOrgCradlepointConnection

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/cradlepoint/sync`

**Summary:** syncOrgCradlepointRouters

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

