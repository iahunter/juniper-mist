# Sites Clients - NAC API

## `GET /api/v1/sites/{site_id}/nac_clients/count`

**Summary:** countSiteNacClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_nac_clients_count_distinct`|NAC Policy Rule ID, if matched|
|`last_nacrule_id`|query|false|`string`|NAC Policy Rule ID, if matched|
|`nacrule_matched`|query|false|`boolean`|NAC Policy Rule Matched|
|`auth_type`|query|false|`string`|Authentication type, e.g. "eap-tls", "eap-peap", "eap-ttls", "eap-teap", "mab", "psk", "device-auth"|
|`last_vlan_id`|query|false|`string`|Vlan ID|
|`last_nas_vendor`|query|false|`string`|Vendor of NAS device|
|`idp_id`|query|false|`string`|SSO ID, if present and used|
|`last_ssid`|query|false|`string`|SSID|
|`last_username`|query|false|`string`|Username presented by the client|
|`timestamp`|query|false|`number`|Start time, in epoch|
|`last_ap`|query|false|`string`|AP MAC connected to by client|
|`mac`|query|false|`string`|MAC address|
|`last_status`|query|false|`string`|Connection status of client i.e "permitted", "denied, "session_ended"|
|`type`|query|false|`string`|Client type i.e. "wireless", "wired" etc.|
|`mdm_compliance_status`|query|false|`string`|MDM compliance of client i.e "compliant", "not compliant"|
|`mdm_provider`|query|false|`string`|MDM provider of client’s organisation eg "intune", "jamf"|
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

## `GET /api/v1/sites/{site_id}/nac_clients/events/count`

**Summary:** countSiteNacClientEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_nac_client_events_count_distinct`||
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

## `GET /api/v1/sites/{site_id}/nac_clients/events/search`

**Summary:** searchSiteNacClientEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`nacrule_id`|query|false|`string`|NAC Policy Rule ID, if matched|
|`nacrule_matched`|query|false|`boolean`|NAC Policy Rule Matched|
|`dryrun_nacrule_id`|query|false|`string`|NAC Policy Dry Run Rule ID, if present and matched|
|`dryrun_nacrule_matched`|query|false|`boolean`|True - if dryrun rule present and matched with priority, False - if not matched or not present|
|`auth_type`|query|false|`string`|Authentication type, e.g. "eap-tls", "eap-peap", "eap-ttls", "eap-teap", "mab", "psk", "device-auth"|
|`vlan`|query|false|`integer`|Vlan ID|
|`nas_vendor`|query|false|`string`|Vendor of NAS device|
|`bssid`|query|false|`string`|BSSID|
|`idp_id`|query|false|`string`|SSO ID, if present and used|
|`idp_role`|query|false|`string`|IDP returned roles/groups for the user|
|`idp_username`|query|false|`string`|Username presented to the Identity Provider|
|`resp_attrs`|query|false|`#/components/schemas/resp_attrs`|Radius attributes returned by NAC to NAS Devive|
|`ssid`|query|false|`string`|SSID|
|`username`|query|false|`string`|Username presented by the client|
|`ap`|query|false|`string`|AP MAC|
|`random_mac`|query|false|`boolean`|AP random macMAC|
|`mac`|query|false|`string`|MAC address|
|`timestamp`|query|false|`number`|Time, in epoch|
|`usermac_label`|query|false|`string`|Labels derived from usermac entry|
|`text`|query|false|`string`|Partial / full MAC address, username, device_mac or ap|
|`nas_ip`|query|false|`string`|IP address of NAS device|
|`ingress_vlan`|query|false|`string`|Vendor specific Vlan ID in radius requests|
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

## `GET /api/v1/sites/{site_id}/nac_clients/search`

**Summary:** searchSiteNacClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`ap`|query|false|`string`|AP MAC connected to by client|
|`auth_type`|query|false|`string`|Authentication type, e.g. "eap-tls", "eap-peap", "eap-ttls", "eap-teap", "mab", "psk", "device-auth"|
|`edr_managed`|query|false|`boolean`|Filters NAC clients that are integrated with EDR providers|
|`edr_provider`|query|false|`#/components/schemas/edr_provider`|EDR provider of client's organization|
|`edr_status`|query|false|`#/components/schemas/edr_status`|EDR Status of the NAC client|
|`family`|query|false|`string`|Client family, e.g. "Phone/Tablet/Wearable", "Access Point"|
|`hostname`|query|false|`string`|Client hostname, e.g. "my-laptop", "my-phone"|
|`idp_id`|query|false|`string`|SSO ID, if present and used|
|`mac`|query|false|`string`|MAC address|
|`mdm_managed`|query|false|`boolean`|Filters NAC clients that are managed by MDM providers|
|`mdm_compliance`|query|false|`string`|MDM compliance of client i.e "compliant", "not compliant"|
|`mdm_provider`|query|false|`string`|MDM provider of client’s organisation eg "intune", "jamf"|
|`mfg`|query|false|`string`|Client manufacturer, e.g. "apple", "cisco", "juniper"|
|`model`|query|false|`string`|Client model, e.g. "iPhone 12", "MX100"|
|`mxedge_id`|query|false|`string`|ID of Mist Edge that the client is connected through|
|`nacrule_id`|query|false|`string`|NAC Policy Rule ID, if matched|
|`nacrule_matched`|query|false|`boolean`|NAC Policy Rule Matched|
|`nacrule_name`|query|false|`string`|NAC Policy Rule Name matched|
|`nas_vendor`|query|false|`string`|Vendor of NAS device|
|`nas_ip`|query|false|`string`|IP address of NAS device|
|`ingress_vlan`|query|false|`string`|Vendor specific Vlan ID in radius requests|
|`os`|query|false|`string`|Client OS, e.g. "iOS 18.1", "Android", "Windows", "Linux"|
|`ssid`|query|false|`string`|SSID|
|`status`|query|false|`#/components/schemas/nac_client_last_status`|Connection status of client i.e "permitted", "denied, "session_ended"|
|`text`|query|false|`string`|partial / full MAC address, last_username, device_mac, nas_ip or last_ap|
|`timestamp`|query|false|`number`|Start time, in epoch|
|`type`|query|false|`string`|Client type i.e. "wireless", "wired" etc.|
|`usermac_label`|query|false|`#/components/schemas/strings`|Labels derived from usermac entry|
|`username`|query|false|`string`|Username presented by the client|
|`vlan`|query|false|`string`|Vlan name or ID assigned to the client|
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

