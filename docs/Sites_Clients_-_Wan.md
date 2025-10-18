# Sites Clients - Wan API

## `GET /api/v1/sites/{site_id}/wan_client/events/count`

**Summary:** countSiteWanClientEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_wan_client_events_distinct`||
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

## `GET /api/v1/sites/{site_id}/wan_clients/count`

**Summary:** countSiteWanClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_wan_clients_count_distinct`||
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

## `GET /api/v1/sites/{site_id}/wan_clients/events/search`

**Summary:** searchSiteWanClientEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`mac`|query|false|`string`|Partial / full MAC address|
|`hostname`|query|false|`string`|Partial / full hostname|
|`ip`|query|false|`string`|Client IP|
|`mfg`|query|false|`string`|Manufacture|
|`nacrule_id`|query|false|`string`|nacrule_id|
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

## `GET /api/v1/sites/{site_id}/wan_clients/search`

**Summary:** searchSiteWanClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|Partial / full MAC address|
|`hostname`|query|false|`string`|Partial / full hostname|
|`ip`|query|false|`string`|Client IP|
|`mfg`|query|false|`string`|Manufacture|
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

