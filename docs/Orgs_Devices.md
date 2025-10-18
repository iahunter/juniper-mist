# Orgs Devices API

## `GET /api/v1/orgs/{org_id}/devices`

**Summary:** listOrgDevices

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/devices/count`

**Summary:** countOrgDevices

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_devices_count_distinct`||
|`hostname`|query|false|`string`|Partial / full hostname|
|`site_id`|query|false|`string`|Site id|
|`model`|query|false|`string`|Device model|
|`managed`|query|false|`string`|for switches and gateways, to filter on managed/unmanaged devices. enum: `true`, `false`|
|`mac`|query|false|`string`|AP mac|
|`version`|query|false|`string`|Version|
|`None`|None|false|``||
|`mxtunnel_status`|query|false|`#/components/schemas/count_org_devices_mxtunnel_status`|MxTunnel status, enum: `up`, `down`|
|`mxedge_id`|query|false|`string`|Mist Edge id, if AP is connecting to a Mist Edge|
|`lldp_system_name`|query|false|`string`|LLDP system name|
|`lldp_system_desc`|query|false|`string`|LLDP system description|
|`lldp_port_id`|query|false|`string`|LLDP port id|
|`lldp_mgmt_addr`|query|false|`string`|LLDP management ip address|
|`type`|query|false|`#/components/schemas/device_type_default_ap`||
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

## `GET /api/v1/orgs/{org_id}/devices/events/count`

**Summary:** countOrgDeviceEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_devices_events_count_distinct`||
|`site_id`|query|false|`string`|Site id|
|`ap`|query|false|`string`|AP mac|
|`apfw`|query|false|`string`|AP Firmware|
|`model`|query|false|`string`|Device model|
|`text`|query|false|`string`|Event message|
|`timestamp`|query|false|`string`|Event time|
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

## `GET /api/v1/orgs/{org_id}/devices/events/search`

**Summary:** searchOrgDeviceEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|Device mac|
|`model`|query|false|`string`|Device model|
|`device_type`|query|false|`#/components/schemas/device_type_with_all`||
|`text`|query|false|`string`|Event message|
|`timestamp`|query|false|`string`|Event time|
|`None`|None|false|``||
|`last_by`|query|false|`string`|Return last/recent event for passed in field|
|`includes`|query|false|`string`|Keyword to include events from additional indices (e.g. ext_tunnel for prisma events)|
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

## `GET /api/v1/orgs/{org_id}/devices/last_config/count`

**Summary:** countOrgDeviceLastConfigs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_default_ap`||
|`distinct`|query|false|`#/components/schemas/org_devices_last_configs_count_distinct`||
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

## `GET /api/v1/orgs/{org_id}/devices/last_config/search`

**Summary:** searchOrgDeviceLastConfigs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`device_type`|query|false|`#/components/schemas/last_config_device_type`||
|`mac`|query|false|`string`|Device MAC address|
|`name`|query|false|`string`|Devices Name|
|`version`|query|false|`string`|Device Version|
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

## `GET /api/v1/orgs/{org_id}/devices/radio_macs`

**Summary:** listOrgApsMacs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `GET /api/v1/orgs/{org_id}/devices/search`

**Summary:** searchOrgDevices

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`band_24_bandwidth`|query|false|`integer`|If `type`==`ap`, Bandwidth of band_24|
|`band_24_channel`|query|false|`integer`|If `type`==`ap`, Channel of band_24|
|`band_24_power`|query|false|`integer`|If `type`==`ap`, Power of band_24|
|`band_5_bandwidth`|query|false|`integer`|If `type`==`ap`, Bandwidth of band_5|
|`band_5_channel`|query|false|`integer`|If `type`==`ap`, Channel of band_5|
|`band_5_power`|query|false|`integer`|If `type`==`ap`, Power of band_5|
|`band_6_bandwidth`|query|false|`integer`|If `type`==`ap`, Bandwidth of band_6|
|`band_6_channel`|query|false|`integer`|If `type`==`ap`, Channel of band_6|
|`band_6_power`|query|false|`integer`|If `type`==`ap`, Power of band_6|
|`cpu`|query|false|`string`|If `type`==`switch` or `type`==`gateway`, max cpu usage|
|`clustered`|query|false|`string`|If `type`==`gateway`, true / false|
|`eth0_port_speed`|query|false|`integer`|If `type`==`ap`, Port speed of eth0|
|`evpntopo_id`|query|false|`string`|If `type`==`switch`, EVPN topology id|
|`ext_ip`|query|false|`string`|External IP Address|
|`hostname`|query|false|`string`|Partial / full hostname|
|`None`|None|false|``||
|`last_config_status`|query|false|`string`|If `type`==`switch` or `type`==`gateway`, last configuration status|
|`last_hostname`|query|false|`string`|If `type`==`switch` or `type`==`gateway`, last hostname|
|`lldp_mgmt_addr`|query|false|`string`|If `type`==`ap`, LLDP management ip address|
|`lldp_port_id`|query|false|`string`|If `type`==`ap`, LLDP port id|
|`lldp_power_allocated`|query|false|`integer`|If `type`==`ap`, LLDP Allocated Power|
|`lldp_power_draw`|query|false|`integer`|If `type`==`ap`, LLDP Negotiated Power|
|`lldp_system_desc`|query|false|`string`|If `type`==`ap`, LLDP system description|
|`lldp_system_name`|query|false|`string`|If `type`==`ap`, LLDP system name|
|`mac`|query|false|`string`|Device mac|
|`model`|query|false|`string`|Device model|
|`mxedge_id`|query|false|`string`|If `type`==`ap`, Mist Edge id, if AP is connecting to a Mist Edge|
|`mxedge_ids`|query|false|`string`|If `type`==`ap`, Comma separated list of Mist Edge ids, if AP is connecting to a Mist Edge|
|`mxtunnel_status`|query|false|`#/components/schemas/search_org_devices_mxtunnel_status`|If `type`==`ap`, MxTunnel status, up / down|
|`node`|query|false|`string`|If `type`==`gateway`, `node0` / `node1`|
|`node0_mac`|query|false|`string`|If `type`==`gateway`, mac for node0|
|`node1_mac`|query|false|`string`|If `type`==`gateway`, mac for node1|
|`power_constrained`|query|false|`boolean`|If `type`==`ap`, Power_constrained|
|`site_id`|query|false|`string`|Site id|
|`t128agent_version`|query|false|`string`|If `type`==`gateway`,version of 128T agent|
|`version`|query|false|`string`|Version|
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

## `GET /api/v1/orgs/{org_id}/devices/summary`

**Summary:** listOrgDevicesSummary

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/ocdevices/outbound_ssh_cmd`

**Summary:** getOrgJuniperDevicesCommand

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`site_id`|query|false|`string`|Site_id would be used for proxy config check of the site and automatic site assignment|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

