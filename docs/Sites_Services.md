# Sites Services API

## `GET /api/v1/sites/{site_id}/services/derived`

**Summary:** listSiteServicesDerived

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`resolve`|query|false|`boolean`|Whether resolve the site variables|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/services/events/count`

**Summary:** countSiteServicePathEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_service_events_count_distinct`||
|`type`|query|false|`string`|Event type, e.g. GW_SERVICE_PATH_DOWN|
|`text`|query|false|`string`|Description of the event including the reason it is triggered|
|`vpn_name`|query|false|`string`|Peer name|
|`vpn_path`|query|false|`string`|Peer path name|
|`policy`|query|false|`string`|Service policy associated with that specific path|
|`port_id`|query|false|`string`|Network interface|
|`model`|query|false|`string`|Device model|
|`version`|query|false|`string`|Device firmware version|
|`timestamp`|query|false|`number`|Start time, in epoch|
|`mac`|query|false|`string`|MAC address|
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

## `GET /api/v1/sites/{site_id}/services/events/search`

**Summary:** searchSiteServicePathEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`string`|Event type, e.g. GW_SERVICE_PATH_DOWN|
|`text`|query|false|`string`|Description of the event including the reason it is triggered|
|`peer_port_id`|query|false|`string`|Port ID of the peer gateway|
|`peer_mac`|query|false|`string`|MAC address of the peer gateway|
|`vpn_name`|query|false|`string`|Peer name|
|`vpn_path`|query|false|`string`|Peer path name|
|`policy`|query|false|`string`|Service policy associated with that specific path|
|`port_id`|query|false|`string`|Network interface|
|`model`|query|false|`string`|Device model|
|`version`|query|false|`string`|Device firmware version|
|`timestamp`|query|false|`number`|Start time, in epoch|
|`mac`|query|false|`string`|MAC address|
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

