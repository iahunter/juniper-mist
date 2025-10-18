# MSPs Logo API

## `POST /api/v1/msps/{msp_id}/logo`

**Summary:** postMspLogo

**Request (raw array example)**

```json
{
  "logo_url": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MspLogo;

$model = new MspLogo({
  "logo_url": "string_example"
});
$resp = $client->msps logo->postMspLogo($model->toArray());
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

## `DELETE /api/v1/msps/{msp_id}/logo`

**Summary:** deleteMspLogo

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

