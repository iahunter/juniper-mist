# Self MFA API

## `GET /api/v1/self/two_factor/token`

**Summary:** generateSecretFor2faVerification

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`by`|query|false|`#/components/schemas/mfa_secret_type`|If `by`==`qrcode`, returns the secret as a qrcode image|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/self/two_factor/verify`

**Summary:** verifyTwoFactor

**Request (raw array example)**

```json
{
  "two_factor": "123456"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\TwoFactorCode;

$model = new TwoFactorCode({
  "two_factor": "123456"
});
$resp = $client->self mfa->verifyTwoFactor($model->toArray());
print_r($resp);
```

**Responses**

- **200**: Response when 2FA verification is successful
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

