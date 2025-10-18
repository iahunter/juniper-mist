# Sites vBeacons API

## `GET /api/v1/sites/{site_id}/vbeacons`

**Summary:** listSiteVBeacons

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

## `POST /api/v1/sites/{site_id}/vbeacons`

**Summary:** createSiteVBeacon

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "major": 1356,
  "map_id": "63eda950-c6da-11e4-a628-60f81dd250cc",
  "message": "Welcome to Mist",
  "minor": 21,
  "modified_time": 1.23,
  "name": "conference room",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "power": 123,
  "power_mode": "custom",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "url": "https://www.mist.com/any",
  "uuid": "31375aeb-b8d3-1ea6-83bf-a31eb04e1c38",
  "wayfinding_nodename": "node1",
  "x": 53.5,
  "y": 173.1
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Vbeacon;

$model = new Vbeacon({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "major": 1356,
  "map_id": "63eda950-c6da-11e4-a628-60f81dd250cc",
  "message": "Welcome to Mist",
  "minor": 21,
  "modified_time": 1.23,
  "name": "conference room",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "power": 123,
  "power_mode": "custom",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "url": "https://www.mist.com/any",
  "uuid": "31375aeb-b8d3-1ea6-83bf-a31eb04e1c38",
  "wayfinding_nodename": "node1",
  "x": 53.5,
  "y": 173.1
});
$resp = $client->sites vbeacons->createSiteVBeacon($model->toArray());
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

## `GET /api/v1/sites/{site_id}/vbeacons/{vbeacon_id}`

**Summary:** getSiteVBeacon

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/vbeacons/{vbeacon_id}`

**Summary:** updateSiteVBeacon

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "major": 1356,
  "map_id": "63eda950-c6da-11e4-a628-60f81dd250cc",
  "message": "Welcome to Mist",
  "minor": 21,
  "modified_time": 1.23,
  "name": "conference room",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "power": 123,
  "power_mode": "custom",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "url": "https://www.mist.com/any",
  "uuid": "31375aeb-b8d3-1ea6-83bf-a31eb04e1c38",
  "wayfinding_nodename": "node1",
  "x": 53.5,
  "y": 173.1
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Vbeacon;

$model = new Vbeacon({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "major": 1356,
  "map_id": "63eda950-c6da-11e4-a628-60f81dd250cc",
  "message": "Welcome to Mist",
  "minor": 21,
  "modified_time": 1.23,
  "name": "conference room",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "power": 123,
  "power_mode": "custom",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "url": "https://www.mist.com/any",
  "uuid": "31375aeb-b8d3-1ea6-83bf-a31eb04e1c38",
  "wayfinding_nodename": "node1",
  "x": 53.5,
  "y": 173.1
});
$resp = $client->sites vbeacons->updateSiteVBeacon($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/vbeacons/{vbeacon_id}`

**Summary:** deleteSiteVBeacon

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

