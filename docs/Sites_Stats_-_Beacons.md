# Sites Stats - Beacons API

## `GET /api/v1/sites/{site_id}/stats/beacons`

**Summary:** listSiteBeaconsStats

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
    "battery_voltage": 1.23,
    "eddystone_instance": "string_example",
    "eddystone_namespace": "string_example",
    "last_seen": 1470417522,
    "mac": "string_example",
    "map_id": "string_example",
    "name": "string_example",
    "power": 123,
    "type": "string_example",
    "x": 1.23,
    "y": 1.23
  }
]
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

