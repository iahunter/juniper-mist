# Sites Clients - Wired API

## `GET /api/v1/sites/{site_id}/wired_clients/count`

**Summary:** countSiteWiredClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_wired_clients_count_distinct`||
|`mac`|query|false|`string`|Client mac|
|`device_mac`|query|false|`string`|Device mac|
|`port_id`|query|false|`string`|Port id|
|`vlan`|query|false|`string`|VLAN|
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

## `GET /api/v1/sites/{site_id}/wired_clients/search`

**Summary:** searchSiteWiredClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`device_mac`|query|false|`string`|Device mac|
|`mac`|query|false|`string`|Client mac|
|`ip`|query|false|`string`|Client ip|
|`port_id`|query|false|`string`|Port id|
|`source`|query|false|`#/components/schemas/client_info_source`|source from where the client was learned (lldp, mac)|
|`vlan`|query|false|`string`|VLAN|
|`manufacture`|query|false|`string`|Manufacture|
|`text`|query|false|`string`|Single entry of hostname/mac|
|`nacrule_id`|query|false|`string`|nacrule_id|
|`dhcp_hostname`|query|false|`string`|DHCP Hostname|
|`dhcp_fqdn`|query|false|`string`|DHCP FQDN|
|`dhcp_client_identifier`|query|false|`string`|DHCP Client Identifier|
|`dhcp_vendor_class_identifier`|query|false|`string`|DHCP Vendor Class Identifier|
|`dhcp_request_params`|query|false|`string`|DHCP Request Parameters|
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

