# Orgs Clients - Wired API

## `GET /api/v1/orgs/{org_id}/wired_clients/count`

**Summary:** countOrgWiredClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_wired_clients_count_distinct`||
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

## `GET /api/v1/orgs/{org_id}/wired_clients/search`

**Summary:** searchOrgWiredClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`auth_state`|query|false|`string`|Authentication state|
|`auth_method`|query|false|`string`|Authentication method|
|`source`|query|false|`#/components/schemas/client_info_source`|source from where the client was learned (lldp, mac)|
|`site_id`|query|false|`string`|Site ID|
|`device_mac`|query|false|`string`|Device mac (Gateway/Switch) where the client has connected to|
|`mac`|query|false|`string`|Partial / full MAC address|
|`port_id`|query|false|`string`|Port id where the client has connected to|
|`vlan`|query|false|`integer`|VLAN|
|`None`|None|false|``||
|`manufacture`|query|false|`string`|Client manufacturer|
|`text`|query|false|`string`|Partial / full MAC address, hostname or username|
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

