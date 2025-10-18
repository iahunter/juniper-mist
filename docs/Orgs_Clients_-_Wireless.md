# Orgs Clients - Wireless API

## `GET /api/v1/orgs/{org_id}/clients/count`

**Summary:** countOrgWirelessClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_clients_count_distinct`||
|`mac`|query|false|`string`|Partial / full MAC address|
|`hostname`|query|false|`string`|Partial / full hostname|
|`device`|query|false|`string`|Device type, e.g. Mac, Nvidia, iPhone|
|`os`|query|false|`string`|OS, e.g. Sierra, Yosemite, Windows 10|
|`model`|query|false|`string`|Model, e.g. "MBP 15 late 2013", 6, 6s, "8+ GSM"|
|`ap`|query|false|`string`|AP mac where the client has connected to|
|`vlan`|query|false|`string`|VLAN|
|`ssid`|query|false|`string`|SSID|
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

## `GET /api/v1/orgs/{org_id}/clients/events/count`

**Summary:** countOrgWirelessClientEvents

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
|`wlan_id`|query|false|`string`|WLAN ID|
|`site_id`|query|false|`string`|Site ID|
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

## `GET /api/v1/orgs/{org_id}/clients/events/search`

**Summary:** searchOrgWirelessClientEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`reason_code`|query|false|`integer`|For assoc/disassoc events|
|`ssid`|query|false|`string`|SSID Name|
|`ap`|query|false|`string`|AP MAC|
|`key_mgmt`|query|false|`#/components/schemas/client_key_mgmt`|Key Management Protocol, e.g. WPA2-PSK, WPA3-SAE, WPA2-Enterprise|
|`None`|None|false|``||
|`None`|None|false|``||
|`wlan_id`|query|false|`string`|WLAN_id|
|`nacrule_id`|query|false|`string`|Nacrule_id|
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

## `GET /api/v1/orgs/{org_id}/clients/search`

**Summary:** searchOrgWirelessClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`site_id`|query|false|`string`|Site ID|
|`mac`|query|false|`string`|Partial / full MAC address|
|`None`|None|false|``||
|`hostname`|query|false|`string`|Partial / full hostname|
|`band`|query|false|`string`|Radio band. enum: `24`, `5`, `6`|
|`device`|query|false|`string`|Device type, e.g. Mac, Nvidia, iPhone|
|`os`|query|false|`string`|Only available for clients running the Marvis Client app, os, e.g. Sierra, Yosemite, Windows 10|
|`model`|query|false|`string`|Only available for clients running the Marvis Client app, model, e.g. "MBP 15 late 2013", 6, 6s, "8+ GSM"|
|`ap`|query|false|`string`|AP mac where the client has connected to|
|`None`|None|false|``||
|`psk_name`|query|false|`string`|Only available for clients using PPSK authentication, the Name of the PSK|
|`username`|query|false|`string`|Only available for clients using 802.1X authentication, partial / full username|
|`vlan`|query|false|`string`|VLAN|
|`ssid`|query|false|`string`|SSID|
|`text`|query|false|`string`|Partial / full MAC address, hostname, username, psk_name or ip|
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

## `GET /api/v1/orgs/{org_id}/clients/sessions/count`

**Summary:** countOrgWirelessClientsSessions

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_client_sessions_count_distinct`||
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

## `GET /api/v1/orgs/{org_id}/clients/sessions/search`

**Summary:** searchOrgWirelessClientSessions

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

