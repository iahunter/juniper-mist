# Orgs SCEP API

## `GET /api/v1/orgs/{org_id}/setting/mist_scep`

**Summary:** getOrgMistScep

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/setting/mist_scep`

**Summary:** updateOrgMistScep

**Request (raw array example)**

```json
{
  "cert_providers": [
    "string_example"
  ],
  "enable": true,
  "suspended": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgSettingScep;

$model = new OrgSettingScep({
  "cert_providers": [
    "string_example"
  ],
  "enable": true,
  "suspended": true
});
$resp = $client->orgs scep->updateOrgMistScep($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/setting/mist_scep`

**Summary:** disableOrgMistScep

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/setting/mist_scep/client_certs`

**Summary:** listOrgIssuedClientCertificates

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`sso_name_id`|query|false|`string`|sso_name_id obtained from NAC Portal|
|`serial_number`|query|false|`string`|Serial Number of the certificate|
|`device_id`|query|false|`string`|Device ID|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/mist_scep/client_certs/revoke`

**Summary:** revokeOrgIssuedClientCertificates

**Request (raw array example)**

```json
{
  "serial_numbers": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ClientCertSerialNumbers;

$model = new ClientCertSerialNumbers({
  "serial_numbers": [
    "string_example"
  ]
});
$resp = $client->orgs scep->revokeOrgIssuedClientCertificates($model->toArray());
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

