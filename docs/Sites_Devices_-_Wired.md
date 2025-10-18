# Sites Devices - Wired API

## `PUT /api/v1/sites/{site_id}/devices/{device_id}/local_port_config`

**Summary:** updateSiteLocalSwitchPortConfig

**Request (raw array example)**

```json
{}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\LocalPortConfig;

$model = new LocalPortConfig({});
$resp = $client->sites devices - wired->updateSiteLocalSwitchPortConfig($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/devices/{device_id}/local_port_config`

**Summary:** deleteSiteLocalSwitchPortConfig

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

