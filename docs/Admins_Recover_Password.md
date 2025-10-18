# Admins Recover Password API

## `POST /api/v1/recover`

**Summary:** recoverPassword

**Request (raw array example)**

```json
{
  "email": "test@mistsys.com",
  "recaptcha": "string_example",
  "recaptcha_flavor": "hcaptcha"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Recover;

$model = new Recover({
  "email": "test@mistsys.com",
  "recaptcha": "string_example",
  "recaptcha_flavor": "hcaptcha"
});
$resp = $client->admins recover password->recoverPassword($model->toArray());
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

## `POST /api/v1/recover/verify/{token}`

**Summary:** verifyRecoverPassword

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

