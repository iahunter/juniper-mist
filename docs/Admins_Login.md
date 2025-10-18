# Admins Login API

## `POST /api/v1/login`

**Summary:** login

**Request (raw array example)**

```json
{
  "email": "test@mistsys.com",
  "password": "foryoureyesonly",
  "two_factor": "123456"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Login;

$model = new Login({
  "email": "test@mistsys.com",
  "password": "foryoureyesonly",
  "two_factor": "123456"
});
$resp = $client->admins login->login($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: 

---

## `POST /api/v1/login/two_factor`

**Summary:** twoFactor

**Request (raw array example)**

```json
{
  "two_factor": "123456"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\TwoFactorString;

$model = new TwoFactorString({
  "two_factor": "123456"
});
$resp = $client->admins login->twoFactor($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: 
- **401**: two_factor code is incorrect or the user hasn't login yet
- **403**: 
- **404**: The user doesn't have 2FA enabled
- **429**: 

---

