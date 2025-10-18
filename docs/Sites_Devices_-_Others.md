# Sites Devices - Others API

## `GET /api/v1/sites/{site_id}/otherdevices`

**Summary:** listSiteOtherDevices

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`vendor`|query|false|`string`||
|`mac`|query|false|`string`||
|`serial`|query|false|`string`||
|`model`|query|false|`string`||
|`name`|query|false|`string`||
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

## `GET /api/v1/sites/{site_id}/otherdevices/events/count`

**Summary:** countSiteOtherDeviceEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_other_device_events_count_distinct`||
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

## `GET /api/v1/sites/{site_id}/otherdevices/events/search`

**Summary:** searchSiteOtherDeviceEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|MAC|
|`device_mac`|query|false|`string`|MAC of attached device|
|`vendor`|query|false|`string`|Vendor name|
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

