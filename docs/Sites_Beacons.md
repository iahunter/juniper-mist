# Sites Beacons API

## `GET /api/v1/sites/{site_id}/beacons`

**Summary:** listSiteBeacons

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/beacons`

**Summary:** createSiteBeacon

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "eddystone_instance": "string_example",
  "eddystone_namespace": "string_example",
  "eddystone_url": "string_example",
  "for_site": true,
  "ibeacon_major": 123,
  "ibeacon_minor": 123,
  "ibeacon_uuid": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "power": 123,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "type": "string_example",
  "x": 1.23,
  "y": 1.23
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Beacon;

$model = new Beacon({
  "created_time": 1.23,
  "eddystone_instance": "string_example",
  "eddystone_namespace": "string_example",
  "eddystone_url": "string_example",
  "for_site": true,
  "ibeacon_major": 123,
  "ibeacon_minor": 123,
  "ibeacon_uuid": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "power": 123,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "type": "string_example",
  "x": 1.23,
  "y": 1.23
});
$resp = $client->sites beacons->createSiteBeacon($model->toArray());
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

## `GET /api/v1/sites/{site_id}/beacons/{beacon_id}`

**Summary:** getSiteBeacon

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/beacons/{beacon_id}`

**Summary:** updateSiteBeacon

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "eddystone_instance": "string_example",
  "eddystone_namespace": "string_example",
  "eddystone_url": "string_example",
  "for_site": true,
  "ibeacon_major": 123,
  "ibeacon_minor": 123,
  "ibeacon_uuid": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "power": 123,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "type": "string_example",
  "x": 1.23,
  "y": 1.23
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Beacon;

$model = new Beacon({
  "created_time": 1.23,
  "eddystone_instance": "string_example",
  "eddystone_namespace": "string_example",
  "eddystone_url": "string_example",
  "for_site": true,
  "ibeacon_major": 123,
  "ibeacon_minor": 123,
  "ibeacon_uuid": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "power": 123,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "type": "string_example",
  "x": 1.23,
  "y": 1.23
});
$resp = $client->sites beacons->updateSiteBeacon($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/beacons/{beacon_id}`

**Summary:** deleteSiteBeacon

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

