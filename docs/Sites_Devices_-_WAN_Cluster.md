# Sites Devices - WAN Cluster API

## `GET /api/v1/sites/{site_id}/devices/{device_id}/ha`

**Summary:** GetSiteDeviceHaClusterNode

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/ha`

**Summary:** createSiteDeviceHaCluster

**Request (raw array example)**

```json
{
  "nodes": [
    {
      "mac": "string_example"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\GatewayCluster;

$model = new GatewayCluster({
  "nodes": [
    {
      "mac": "string_example"
    }
  ]
});
$resp = $client->sites devices - wan cluster->createSiteDeviceHaCluster($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/devices/{device_id}/ha`

**Summary:** deleteSiteDeviceHaCluster

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

