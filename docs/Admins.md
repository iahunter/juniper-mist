# Admins API

## `POST /api/v1/invite/verify/{token}`

**Summary:** verifyAdminInvite

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/register`

**Summary:** registerNewAdmin

**Request (raw array example)**

```json
{
  "account_only": true,
  "allow_mist": true,
  "city": "Cupertino",
  "country": "United States",
  "email": "test@mistsys.com",
  "first_name": "John",
  "invite_code": "MISTROCKS",
  "last_name": "Smith",
  "org_name": "Smith LLC",
  "password": "foryoureyesonly",
  "recaptcha": "string_example",
  "recaptcha_flavor": "hcaptcha",
  "referer_invite_token": "Dm2gtT8dwMeM4Bc2E8FLIaA96VHOjPat",
  "return_to": "https://mist.zendesk.com/hc/quickstart.pdf",
  "state": "CA",
  "street_address": "1601 S De Anza Blvd Ste 248",
  "street_address 2": "1601 S De Anza Blvd Ste 248",
  "zipcode": "95014"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AdminInvite;

$model = new AdminInvite({
  "account_only": true,
  "allow_mist": true,
  "city": "Cupertino",
  "country": "United States",
  "email": "test@mistsys.com",
  "first_name": "John",
  "invite_code": "MISTROCKS",
  "last_name": "Smith",
  "org_name": "Smith LLC",
  "password": "foryoureyesonly",
  "recaptcha": "string_example",
  "recaptcha_flavor": "hcaptcha",
  "referer_invite_token": "Dm2gtT8dwMeM4Bc2E8FLIaA96VHOjPat",
  "return_to": "https://mist.zendesk.com/hc/quickstart.pdf",
  "state": "CA",
  "street_address": "1601 S De Anza Blvd Ste 248",
  "street_address 2": "1601 S De Anza Blvd Ste 248",
  "zipcode": "95014"
});
$resp = $client->admins->registerNewAdmin($model->toArray());
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

## `GET /api/v1/register/recaptcha`

**Summary:** getAdminRegistrationInfo

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`recaptcha_flavor`|query|false|`#/components/schemas/recaptcha_flavor`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/register/verify/{token}`

**Summary:** verifyRegistration

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

