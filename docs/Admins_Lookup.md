# Admins Lookup API

## `POST /api/v1/login/lookup`

**Summary:** lookup

**Request (raw array example)**

```json
{
  "email": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\EmailString;

$model = new EmailString({
  "email": "string_example"
});
$resp = $client->admins lookup->lookup($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: User does not exist
- **429**: 

---

