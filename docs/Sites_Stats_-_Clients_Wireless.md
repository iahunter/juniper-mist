# Sites Stats - Clients Wireless API

## `GET /api/v1/sites/{site_id}/stats/clients`

**Summary:** listSiteWirelessClientsStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`wired`|query|false|`boolean`||
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

## `GET /api/v1/sites/{site_id}/stats/clients/{client_mac}`

**Summary:** getSiteWirelessClientStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`wired`|query|false|`boolean`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/stats/maps/{map_id}/clients`

**Summary:** getSiteWirelessClientsStatsByMap

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

## `GET /api/v1/sites/{site_id}/stats/maps/{map_id}/unconnected_clients`

**Summary:** listSiteUnconnectedClientStats

**Responses**

- **200**: OK
```json
[
  {
    "ap_mac": "string_example",
    "last_seen": 1470417522,
    "mac": "string_example",
    "manufacture": "string_example",
    "map_id": "string_example",
    "rssi": 123,
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

