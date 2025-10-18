# Self API Token API

## `GET /api/v1/self/apitokens`

**Summary:** listApiTokens

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/self/apitokens`

**Summary:** createApiToken

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "key": "1qkb...QQCL",
  "last_used": 1690115110,
  "name": "org_token_xyz"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UserApitoken;

$model = new UserApitoken({
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "key": "1qkb...QQCL",
  "last_used": 1690115110,
  "name": "org_token_xyz"
});
$resp = $client->self api token->createApiToken($model->toArray());
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

## `GET /api/v1/self/apitokens/{apitoken_id}`

**Summary:** getApiToken

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/self/apitokens/{apitoken_id}`

**Summary:** updateApiToken

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "key": "1qkb...QQCL",
  "last_used": 1690115110,
  "name": "org_token_xyz"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UserApitoken;

$model = new UserApitoken({
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "key": "1qkb...QQCL",
  "last_used": 1690115110,
  "name": "org_token_xyz"
});
$resp = $client->self api token->updateApiToken($model->toArray());
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

## `DELETE /api/v1/self/apitokens/{apitoken_id}`

**Summary:** deleteApiToken

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

