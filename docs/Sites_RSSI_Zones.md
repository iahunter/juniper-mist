# Sites RSSI Zones API

## `GET /api/v1/sites/{site_id}/rssizones`

**Summary:** listSiteRssiZones

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||

**Responses**

- **200**: OK
```json
[
  {
    "created_time": 1.23,
    "devices": [
      {
        "device_id": "00000000-0000-0000-1000-d8695a0f9e61",
        "rssi": 0
      }
    ],
    "for_site": true,
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "modified_time": 1.23,
    "name": "zone name",
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
  }
]
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/rssizones`

**Summary:** createSiteRssiZone

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "devices": [
    {
      "device_id": "00000000-0000-0000-1000-d8695a0f9e61",
      "rssi": 0
    }
  ],
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "zone name",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\RssiZone;

$model = new RssiZone({
  "created_time": 1.23,
  "devices": [
    {
      "device_id": "00000000-0000-0000-1000-d8695a0f9e61",
      "rssi": 0
    }
  ],
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "zone name",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->sites rssi zones->createSiteRssiZone($model->toArray());
print_r($resp);
```

**Responses**

- **200**: OK
```json
{
  "created_time": 1.23,
  "devices": [
    {
      "device_id": "00000000-0000-0000-1000-d8695a0f9e61",
      "rssi": 0
    }
  ],
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "zone name",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/rssizones/{rssizone_id}`

**Summary:** getSiteRssiZone

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/rssizones/{rssizone_id}`

**Summary:** updateSiteRssiZone

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "devices": [
    {
      "device_id": "00000000-0000-0000-1000-d8695a0f9e61",
      "rssi": 0
    }
  ],
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "zone name",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\RssiZone;

$model = new RssiZone({
  "created_time": 1.23,
  "devices": [
    {
      "device_id": "00000000-0000-0000-1000-d8695a0f9e61",
      "rssi": 0
    }
  ],
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "zone name",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->sites rssi zones->updateSiteRssiZone($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/rssizones/{rssizone_id}`

**Summary:** deleteSiteRssiZone

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

