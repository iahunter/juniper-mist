# Sites Clients - Wireless API

## `GET /api/v1/sites/{site_id}/clients/count`

**Summary:** countSiteWirelessClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_clients_count_distinct`||
|`ssid`|query|false|`string`||
|`ap`|query|false|`string`||
|`None`|None|false|``||
|`vlan`|query|false|`string`||
|`hostname`|query|false|`string`||
|`os`|query|false|`string`||
|`model`|query|false|`string`||
|`device`|query|false|`string`||
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

## `GET /api/v1/sites/{site_id}/clients/events/count`

**Summary:** countSiteWirelessClientEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_client_events_count_distinct`||
|`None`|None|false|``||
|`reason_code`|query|false|`integer`|For assoc/disassoc events|
|`ssid`|query|false|`string`|SSID Name|
|`ap`|query|false|`string`|AP MAC|
|`None`|None|false|``||
|`None`|None|false|``||
|`wlan_id`|query|false|`string`|WLAN_id|
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

## `GET /api/v1/sites/{site_id}/clients/events/search`

**Summary:** searchSiteWirelessClientEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`reason_code`|query|false|`integer`|For assoc/disassoc events|
|`ssid`|query|false|`string`|SSID Name|
|`ap`|query|false|`string`|AP MAC|
|`None`|None|false|``||
|`None`|None|false|``||
|`wlan_id`|query|false|`string`|WLAN_id|
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

## `GET /api/v1/sites/{site_id}/clients/search`

**Summary:** searchSiteWirelessClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|Partial / full MAC address|
|`None`|None|false|``||
|`hostname`|query|false|`string`|Partial / full hostname|
|`device`|query|false|`string`|Device type, e.g. Mac, Nvidia, iPhone|
|`os`|query|false|`string`|OS, e.g. Sierra, Yosemite, Windows 10|
|`model`|query|false|`string`|model, e.g. "MBP 15 late 2013", 6, 6s, "8+ GSM"|
|`ap`|query|false|`string`|AP mac where the client has connected to|
|`ssid`|query|false|`string`||
|`text`|query|false|`string`|Partial / full MAC address, hostname, username, psk_name or ip|
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

## `GET /api/v1/sites/{site_id}/clients/sessions/count`

**Summary:** countSiteWirelessClientSessions

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_client_sessions_count_distinct`||
|`ap`|query|false|`string`|AP MAC|
|`None`|None|false|``||
|`client_family`|query|false|`string`|E.g. "Mac", "iPhone", "Apple watch"|
|`client_manufacture`|query|false|`string`|E.g. "Apple"|
|`client_model`|query|false|`string`|E.g. "8+", "XS"|
|`client_os`|query|false|`string`|E.g. "Mojave", "Windows 10", "Linux"|
|`ssid`|query|false|`string`|SSID|
|`wlan_id`|query|false|`string`|WLAN_id|
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

## `GET /api/v1/sites/{site_id}/clients/sessions/search`

**Summary:** searchSiteWirelessClientSessions

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`ap`|query|false|`string`|AP MAC|
|`None`|None|false|``||
|`client_family`|query|false|`string`|E.g. "Mac", "iPhone", "Apple watch"|
|`client_manufacture`|query|false|`string`|E.g. "Apple"|
|`client_model`|query|false|`string`|E.g. "8+", "XS"|
|`client_username`|query|false|`string`|Username|
|`client_os`|query|false|`string`|E.g. "Mojave", "Windows 10", "Linux"|
|`ssid`|query|false|`string`|SSID|
|`wlan_id`|query|false|`string`|WLAN_id|
|`None`|None|false|``||
|`psk_name`|query|false|`string`|PSK Name|
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

## `GET /api/v1/sites/{site_id}/clients/{client_mac}/events`

**Summary:** getSiteEventsForClient

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`string`|E.g. MARVIS_EVENT_CLIENT_DHCP_STUCK|
|`None`|None|false|``||
|`None`|None|false|``||
|`channel`|query|false|`string`||
|`wlan_id`|query|false|`string`||
|`ssid`|query|false|`string`||
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

