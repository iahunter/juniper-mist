# Utilities Location API

## `POST /api/v1/sites/{site_id}/devices/send_ble_beacon`

**Summary:** sendSiteDevicesArbitraryBleBeacon

**Request (raw array example)**

```json
{
  "beacon_frame": "68b329da9893e34099c7d8ad5cb9c940",
  "beacon_freq": 100,
  "duration": 10,
  "macs": [
    "string_example"
  ],
  "map_ids": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsSendBleBeacon;

$model = new UtilsSendBleBeacon({
  "beacon_frame": "68b329da9893e34099c7d8ad5cb9c940",
  "beacon_freq": 100,
  "duration": 10,
  "macs": [
    "string_example"
  ],
  "map_ids": [
    "string_example"
  ]
});
$resp = $client->utilities location->sendSiteDevicesArbitraryBleBeacon($model->toArray());
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

