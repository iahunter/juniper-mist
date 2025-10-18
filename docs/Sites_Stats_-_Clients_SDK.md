# Sites Stats - Clients SDK API

## `GET /api/v1/sites/{site_id}/stats/maps/{map_id}/sdkclients`

**Summary:** getSiteSdkStatsByMap

**Responses**

- **200**: OK
```json
[
  {
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "last_seen": 1470417522,
    "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
    "name": "John's iPhone",
    "network_connection": {
      "mac": "string_example",
      "rssi": 1.23,
      "signal_level": 1.23,
      "type": "string_example"
    },
    "uuid": "ada72f8f-1643-e5c6-94db-f2a5636f1a64",
    "x": 60,
    "y": 80
  }
]
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/stats/sdkclients/{sdkclient_id}`

**Summary:** getSiteSdkStats

**Responses**

- **200**: OK
```json
{
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "last_seen": 1470417522,
  "map_id": "string_example",
  "name": "string_example",
  "network_connection": {
    "mac": "string_example",
    "rssi": 1.23,
    "signal_level": 1.23,
    "type": "string_example"
  },
  "uuid": "string_example",
  "vbeacons": [
    {
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "since": 1.23
    }
  ],
  "x": 1.23,
  "y": 1.23,
  "zones": [
    {
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "since": 1.23
    }
  ]
}
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

