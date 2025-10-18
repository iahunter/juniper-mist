# Orgs NAC IDP API

## `POST /api/v1/orgs/{org_id}/mist_nac/test_idp`

**Summary:** validateOrgIdpCredential

**Request (raw array example)**

```json
{
  "password": "string_example",
  "username": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UsernamePassword;

$model = new UsernamePassword({
  "password": "string_example",
  "username": "string_example"
});
$resp = $client->orgs nac idp->validateOrgIdpCredential($model->toArray());
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

