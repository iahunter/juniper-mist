# Orgs Clients - SDK API

## `PUT /api/v1/orgs/{org_id}/sdkclients/{sdkclient_id}`

**Summary:** updateSdkClient

**Request (raw array example)**

```json
{
  "name": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NameString;

$model = new NameString({
  "name": "string_example"
});
$resp = $client->orgs clients - sdk->updateSdkClient($model->toArray());
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

