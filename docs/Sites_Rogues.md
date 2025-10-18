# Sites Rogues API

## `GET /api/v1/sites/{site_id}/insights/rogues`

**Summary:** listSiteRogueAPs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `GET /api/v1/sites/{site_id}/insights/rogues/clients`

**Summary:** listSiteRogueClients

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

## `GET /api/v1/sites/{site_id}/rogues/events/count`

**Summary:** countSiteRogueEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_rogue_events_count_distinct`||
|`None`|None|false|``||
|`ssid`|query|false|`string`|SSID of the network detected as threat|
|`bssid`|query|false|`string`|BSSID of the network detected as threat|
|`ap_mac`|query|false|`string`|MAC of the device that had strongest signal strength for ssid/bssid pair|
|`channel`|query|false|`string`|Channel over which ap_mac heard ssid/bssid pair|
|`seen_on_lan`|query|false|`boolean`|Whether the reporting AP see a wireless client (on LAN) connecting to it|
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

## `GET /api/v1/sites/{site_id}/rogues/events/search`

**Summary:** searchSiteRogueEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`ssid`|query|false|`string`|SSID of the network detected as threat|
|`bssid`|query|false|`string`|BSSID of the network detected as threat|
|`ap_mac`|query|false|`string`|MAC of the device that had strongest signal strength for ssid/bssid pair|
|`channel`|query|false|`integer`|Channel over which ap_mac heard ssid/bssid pair|
|`seen_on_lan`|query|false|`boolean`|Whether the reporting AP see a wireless client (on LAN) connecting to it|
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

## `GET /api/v1/sites/{site_id}/rogues/{rogue_bssid}`

**Summary:** getSiteRogueAP

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

