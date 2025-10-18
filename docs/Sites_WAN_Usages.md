# Sites WAN Usages API

## `GET /api/v1/sites/{site_id}/wan_usages/count`

**Summary:** countSiteWanUsage

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|MAC address|
|`peer_mac`|query|false|`string`|Peer MAC address|
|`port_id`|query|false|`string`|Port ID for the device|
|`peer_port_id`|query|false|`string`|Peer Port ID for the device|
|`policy`|query|false|`string`|Policy for the wan path|
|`tenant`|query|false|`string`|Tenant network in which the packet is sent|
|`path_type`|query|false|`string`|path_type of the port|
|`distinct`|query|false|`#/components/schemas/wan_usages_count_distinct`||
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

## `GET /api/v1/sites/{site_id}/wan_usages/search`

**Summary:** searchSiteWanUsage

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|MAC address|
|`peer_mac`|query|false|`string`|Peer MAC address|
|`port_id`|query|false|`string`|Port ID for the device|
|`peer_port_id`|query|false|`string`|Peer Port ID for the device|
|`policy`|query|false|`string`|Policy for the wan path|
|`tenant`|query|false|`string`|Tenant network in which the packet is sent|
|`path_type`|query|false|`string`|path_type of the port|
|`None`|None|false|``||
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

