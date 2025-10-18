# Self OAuth2 API

## `GET /api/v1/self/oauth/{provider}`

**Summary:** getOauth2UrlForLinking

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`forward`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/self/oauth/{provider}`

**Summary:** linkOauth2MistAccount

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
$resp = $client->self oauth2->linkOauth2MistAccount($model->toArray());
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

