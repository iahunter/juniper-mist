# Sites Stats - Apps API

## `GET /api/v1/sites/{site_id}/stats/apps/count`

**Summary:** countSiteApps

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_apps_count_distinct`|Default for wireless devices is `ap`. Default for wired devices is `device_mac`|
|`device_mac`|query|false|`string`|MAC of the device|
|`app`|query|false|`string`|Application name|
|`wired`|query|false|`string`|If a device is wired or wireless. Default is False.|
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

