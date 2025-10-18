# Orgs Cert API

## `GET /api/v1/orgs/{org_id}/cert`

**Summary:** listOrgCertificates

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/cert/apply_pending`

**Summary:** rotateOrgCertificate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/cert/regenerate`

**Summary:** clearOrgCertificates

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/crl/truncate`

**Summary:** truncateOrgCrlFile

**Request (raw array example)**

```json
{
  "days": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\DaysNumber;

$model = new DaysNumber({
  "days": 123
});
$resp = $client->orgs cert->truncateOrgCrlFile($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/ssl_proxy_cert`

**Summary:** getOrgSslProxyCert

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

