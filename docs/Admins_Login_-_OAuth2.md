# Admins Login - OAuth2 API

## `GET /api/v1/login/oauth/{provider}`

**Summary:** getOauth2AuthorizationUrlForLogin

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`forward`|query|false|`string`|Callback URL|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/login/oauth/{provider}`

**Summary:** loginOauth2

**Request (raw array example)**

```json
{
  "code": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\CodeString;

$model = new CodeString({
  "code": "string_example"
});
$resp = $client->admins login - oauth2->loginOauth2($model->toArray());
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

## `DELETE /api/v1/login/oauth/{provider}`

**Summary:** unlinkOauth2Provider

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

