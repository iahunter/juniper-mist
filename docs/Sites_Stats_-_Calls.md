# Sites Stats - Calls API

## `GET /api/v1/sites/{site_id}/stats/calls/client/{client_mac}/troubleshoot`

**Summary:** troubleshootSiteCall

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`meeting_id`|query|true|`string`|meeting_id|
|`mac`|query|false|`string`|Device identifier|
|`app`|query|false|`string`|Third party app name|
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

## `GET /api/v1/sites/{site_id}/stats/calls/count`

**Summary:** countSiteCalls

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/count_site_calls_distinct`||
|`rating`|query|false|`integer`|Feedback rating (e.g. "rating=1" or "rating=1,2")|
|`app`|query|false|`string`||
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

## `GET /api/v1/sites/{site_id}/stats/calls/search`

**Summary:** searchSiteCalls

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|Device identifier|
|`app`|query|false|`string`|Third party app name|
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

## `GET /api/v1/sites/{site_id}/stats/calls/summary`

**Summary:** getSiteCallsSummary

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`ap_mac`|query|false|`string`|AP MAC, optional|
|`app`|query|false|`string`|APp name (`zoom` or `teams`). default is both. Optional|
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

## `GET /api/v1/sites/{site_id}/stats/calls/troubleshoot`

**Summary:** listSiteTroubleshootCalls

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`ap`|query|false|`string`|AP MAC|
|`meeting_id`|query|false|`string`|meeting_id|
|`mac`|query|false|`string`|Device identifier|
|`app`|query|false|`string`|Third party app name|
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

