# Sites Stats - Assets API

## `GET /api/v1/sites/{site_id}/stats/assets`

**Summary:** listSiteAssetsStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
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

## `GET /api/v1/sites/{site_id}/stats/assets/count`

**Summary:** countSiteAssets

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_assets_count_distinct`||
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/stats/assets/search`

**Summary:** searchSiteAssets

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`||
|`map_id`|query|false|`string`||
|`ibeacon_uuid`|query|false|`string`||
|`ibeacon_major`|query|false|`integer`||
|`ibeacon_minor`|query|false|`integer`||
|`eddystone_uid_namespace`|query|false|`string`||
|`eddystone_uid_instance`|query|false|`string`||
|`eddystone_url`|query|false|`string`||
|`device_name`|query|false|`string`||
|`by`|query|false|`string`||
|`name`|query|false|`string`||
|`ap_mac`|query|false|`string`||
|`beam`|query|false|`string`||
|`rssi`|query|false|`string`||
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
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

## `GET /api/v1/sites/{site_id}/stats/assets/{asset_id}`

**Summary:** getSiteAssetStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
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

## `GET /api/v1/sites/{site_id}/stats/discovered_assets`

**Summary:** listSiteDiscoveredAssets

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||

**Responses**

- **200**: OK
```json
[
  {
    "created_time": 1.23,
    "for_site": true,
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "mac": "string_example",
    "map_id": "string_example",
    "modified_time": 1.23,
    "name": "string_example",
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "tag_id": "string_example"
  }
]
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/stats/filtered_assets`

**Summary:** getSiteAssetsOfInterest

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
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

## `GET /api/v1/sites/{site_id}/stats/maps/{map_id}/discovered_assets`

**Summary:** getSiteDiscoveredAssetByMap

**Responses**

- **200**: OK
```json
[
  {
    "battery_voltage": 2970,
    "beam": 6,
    "device_name": "a",
    "duration": 120,
    "eddystone_uid_instance": "5c5b35000001",
    "eddystone_uid_namespace": "2818e3868dec25629ede",
    "eddystone_url_url": "https://www.abc.com",
    "ibeacon_major": 12,
    "ibeacon_minor": 138,
    "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
    "last_seen": 1470417522,
    "mac": "6fa474be7ae5",
    "map_id": "c45be59f-854d-4ef7-b782-dcd6309c84a9",
    "name": "6fa474be7ae5",
    "rssi": -60,
    "rssizones": [
      {
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "since": 1.23
      }
    ],
    "temperature": 23,
    "x": 280.19918140310193,
    "y": 420.2987721046529,
    "zones": [
      {
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "since": 1.23
      }
    ]
  }
]
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

