# Orgs Integration Juniper API

## `POST /api/v1/orgs/{org_id}/setting/juniper/link_accounts`

**Summary:** linkOrgToJuniperJuniperAccount

**Request (raw array example)**

```json
{
  "password": "password",
  "username": "john@nmo.com"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AccountJuniperConfig;

$model = new AccountJuniperConfig({
  "password": "password",
  "username": "john@nmo.com"
});
$resp = $client->orgs integration juniper->linkOrgToJuniperJuniperAccount($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/setting/juniper/unlink_account`

**Summary:** unlinkOrgFromJuniperCustomerId

**Request (raw array example)**

```json
{
  "accounts": [
    {
      "linked_by": "John Smith (john@abccorp.com)",
      "name": "ABC Corp"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AccountJuniperInfo;

$model = new AccountJuniperInfo({
  "accounts": [
    {
      "linked_by": "John Smith (john@abccorp.com)",
      "name": "ABC Corp"
    }
  ]
});
$resp = $client->orgs integration juniper->unlinkOrgFromJuniperCustomerId($model->toArray());
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

