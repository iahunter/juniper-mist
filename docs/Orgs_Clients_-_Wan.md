# Orgs Clients - Wan API

## `GET /api/v1/orgs/{org_id}/wan_client/events/count`

**Summary:** countOrgWanClientEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_wan_clients_events_count_distinct`||
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

## `GET /api/v1/orgs/{org_id}/wan_clients/count`

**Summary:** countOrgWanClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_wan_clients_count_distinct`||
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

## `GET /api/v1/orgs/{org_id}/wan_clients/events/search`

**Summary:** searchOrgWanClientEvents

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

## `GET /api/v1/orgs/{org_id}/wan_clients/search`

**Summary:** searchOrgWanClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|Partial / full MAC address|
|`hostname`|query|false|`string`|Partial / full hostname|
|`ip`|query|false|`string`|Client IP|
|`network`|query|false|`string`|Network|
|`ip_src`|query|false|`string`|IP source|
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

