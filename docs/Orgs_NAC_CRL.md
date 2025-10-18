# Orgs NAC CRL API

## `GET /api/v1/orgs/{org_id}/setting/mist_nac_crls`

**Summary:** getOrgNacCrl

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/mist_nac_crls`

**Summary:** importOrgNacCrl

**Request (raw array example)**

```json
{
  "file": "string_example",
  "json": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgCrlImportFile;

$model = new OrgCrlImportFile({
  "file": "string_example",
  "json": "string_example"
});
$resp = $client->orgs nac crl->importOrgNacCrl($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/setting/mist_nac_crls/{naccrl_id}`

**Summary:** deleteOrgNacCrl

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

