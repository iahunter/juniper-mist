# Sites Stats - Devices API

## `GET /api/v1/sites/{site_id}/stats/devices`

**Summary:** listSiteDevicesStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_with_all`||
|`status`|query|false|`#/components/schemas/stat_device_status_filter`||
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

## `GET /api/v1/sites/{site_id}/stats/devices/{device_id}`

**Summary:** getSiteDeviceStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/stats/devices/{device_id}/clients`

**Summary:** getSiteAllClientsStatsByDevice

**Responses**

- **200**: OK
```json
[
  {
    "accuracy": 123,
    "airespace_ifname": "string_example",
    "airwatch": {
      "authorized": true
    },
    "ap_id": "string_example",
    "ap_mac": "string_example",
    "band": "string_example",
    "channel": 123,
    "dual_band": true,
    "family": "string_example",
    "guest": {
      "access_code_email": "string_example",
      "ap_mac": "string_example",
      "auth_method": "string_example",
      "authorized": true,
      "authorized_expiring_time": 1480704955,
      "authorized_time": 1480704355,
      "company": "abc",
      "email": "john@abc.com",
      "field1": "string_example",
      "field2": "string_example",
      "field3": "string_example",
      "field4": "string_example",
      "mac": "string_example",
      "minutes": 123,
      "name": "John Smith",
      "random_mac": true,
      "ssid": "Guest-SSID",
      "wlan_id": "6748cfa6-4e12-11e6-9188-0242ac110007"
    },
    "hostname": "string_example",
    "idle_time": 1.23,
    "ip": "string_example",
    "is_guest": true,
    "key_mgmt": "string_example",
    "last_seen": 1470417522,
    "mac": "string_example",
    "manufacture": "string_example",
    "map_id": "string_example",
    "model": "string_example",
    "num_locating_aps": 123,
    "os": "string_example",
    "power_saving": true,
    "proto": "string_example",
    "psk_id": "string_example",
    "rssi": 1.23,
    "rssizones": [
      {
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "since": 123
      }
    ],
    "rx_bps": 60003,
    "rx_bytes": 8515104416,
    "rx_packets": 57770567,
    "rx_rate": 1.23,
    "rx_retries": 123,
    "snr": 1.23,
    "ssid": "string_example",
    "tx_bps": 634301,
    "tx_bytes": 211217389682,
    "tx_packets": 812204062,
    "tx_rate": 1.23,
    "tx_retries": 123,
    "type": "string_example",
    "uptime": 1.23,
    "username": "string_example",
    "vbeacons": [
      {
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "since": 123
      }
    ],
    "vlan_id": "string_example",
    "wlan_id": "string_example",
    "wxrule_id": "string_example",
    "wxrule_usage": [
      {
        "tag_id": "string_example",
        "usage": 123
      }
    ],
    "x": 1.23,
    "x_m": 1.23,
    "y": 1.23,
    "y_m": 1.23,
    "zones": [
      {
        "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
        "since": 123
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

## `GET /api/v1/sites/{site_id}/stats/gateways/metrics`

**Summary:** getSiteGatewayMetrics

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/stats/switches/metrics`

**Summary:** getSiteSwitchesMetrics

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/switch_metric_type`||
|`scope`|query|false|`#/components/schemas/switch_metric_scope`||
|`switch_mac`|query|false|`string`|Switch mac, used only with metric `type`==`active_ports_summary`|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

