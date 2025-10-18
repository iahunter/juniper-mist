# Sites Skyatp API

## `GET /api/v1/sites/{site_id}/skyatp/events/count`

**Summary:** countSiteSkyatpEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_sky_atp_events_count_distinct`||
|`type`|query|false|`string`|Event type, e.g. cc, fs, mw|
|`mac`|query|false|`string`|Client MAC|
|`device_mac`|query|false|`string`|Device MAC|
|`threat_level`|query|false|`integer`|Threat level|
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

## `GET /api/v1/sites/{site_id}/skyatp/events/search`

**Summary:** searchSiteSkyatpEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`string`|Event type, e.g. cc, fs, mw|
|`mac`|query|false|`string`|Client MAC|
|`device_mac`|query|false|`string`|Device MAC|
|`threat_level`|query|false|`integer`|Threat level|
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

