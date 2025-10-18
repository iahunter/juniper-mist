# Orgs Stats - Ports API

## `GET /api/v1/orgs/{org_id}/stats/ports/count`

**Summary:** countOrgSwOrGwPorts

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_ports_count_distinct`||
|`full_duplex`|query|false|`boolean`|Indicates full or half duplex|
|`mac`|query|false|`string`|Device identifier|
|`neighbor_mac`|query|false|`string`|Chassis identifier of the chassis type listed|
|`neighbor_port_desc`|query|false|`string`|Description supplied by the system on the interface E.g. "GigabitEthernet2/0/39"|
|`neighbor_system_name`|query|false|`string`|Name supplied by the system on the interface E.g. neighbor system name E.g. "Kumar-Acc-SW.mist.local"|
|`poe_disabled`|query|false|`boolean`|Is the POE configured not be disabled.|
|`poe_mode`|query|false|`string`|POE mode depending on class E.g. "802.3at"|
|`poe_on`|query|false|`boolean`|Is the device attached to POE|
|`port_id`|query|false|`string`|Interface name|
|`port_mac`|query|false|`string`|Interface mac address|
|`power_draw`|query|false|`number`|Amount of power being used by the interface at the time the command is executed. Unit in watts.|
|`tx_pkts`|query|false|`integer`|Output packets|
|`rx_pkts`|query|false|`integer`|Input packets|
|`rx_bytes`|query|false|`integer`|Input bytes|
|`tx_bps`|query|false|`integer`|Output rate|
|`rx_bps`|query|false|`integer`|Input rate|
|`tx_mcast_pkts`|query|false|`integer`|Multicast output packets|
|`tx_bcast_pkts`|query|false|`integer`|Broadcast output packets|
|`rx_mcast_pkts`|query|false|`integer`|Multicast input packets|
|`rx_bcast_pkts`|query|false|`integer`|Broadcast input packets|
|`speed`|query|false|`integer`|Port speed|
|`stp_state`|query|false|`#/components/schemas/count_ports_stp_state`|If `up`==`true`|
|`stp_role`|query|false|`#/components/schemas/count_ports_stp_role`|If `up`==`true`|
|`auth_state`|query|false|`#/components/schemas/count_ports_auth_state`|If `up`==`true` && has Authenticator role|
|`up`|query|false|`boolean`|Indicates if interface is up|
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

## `GET /api/v1/orgs/{org_id}/stats/ports/search`

**Summary:** searchOrgSwOrGwPorts

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`full_duplex`|query|false|`boolean`|Indicates full or half duplex|
|`mac`|query|false|`string`|Device identifier|
|`neighbor_mac`|query|false|`string`|Chassis identifier of the chassis type listed|
|`neighbor_port_desc`|query|false|`string`|Description supplied by the system on the interface E.g. "GigabitEthernet2/0/39"|
|`neighbor_system_name`|query|false|`string`|Name supplied by the system on the interface E.g. neighbor system name E.g. "Kumar-Acc-SW.mist.local"|
|`poe_disabled`|query|false|`boolean`|Is the POE configured not be disabled.|
|`poe_mode`|query|false|`string`|POE mode depending on class E.g. "802.3at"|
|`poe_on`|query|false|`boolean`|Is the device attached to POE|
|`port_id`|query|false|`string`|Interface name|
|`port_mac`|query|false|`string`|Interface mac address|
|`power_draw`|query|false|`number`|Amount of power being used by the interface at the time the command is executed. Unit in watts.|
|`tx_pkts`|query|false|`integer`|Output packets|
|`rx_pkts`|query|false|`integer`|Input packets|
|`rx_bytes`|query|false|`integer`|Input bytes|
|`tx_bps`|query|false|`integer`|Output rate|
|`rx_bps`|query|false|`integer`|Input rate|
|`tx_errors`|query|false|`integer`|Output errors|
|`rx_errors`|query|false|`integer`|Input errors|
|`tx_mcast_pkts`|query|false|`integer`|Multicast output packets|
|`tx_bcast_pkts`|query|false|`integer`|Broadcast output packets|
|`rx_mcast_pkts`|query|false|`integer`|Multicast input packets|
|`rx_bcast_pkts`|query|false|`integer`|Broadcast input packets|
|`speed`|query|false|`integer`|Port speed|
|`mac_limit`|query|false|`integer`|Limit on number of dynamically learned macs|
|`mac_count`|query|false|`integer`|Number of mac addresses in the forwarding table|
|`up`|query|false|`boolean`|Indicates if interface is up|
|`stp_state`|query|false|`#/components/schemas/search_org_sw_or_gw_ports_stp_state`|If `up`==`true`|
|`stp_role`|query|false|`#/components/schemas/search_org_sw_or_gw_ports_stp_role`|If `up`==`true`|
|`auth_state`|query|false|`#/components/schemas/search_org_sw_or_gw_ports_auth_state`|If `up`==`true` && has Authenticator role|
|`optics_bias_current`|query|false|`number`|Bias current of the optics in mA|
|`optics_tx_power`|query|false|`number`|Transmit power of the optics in dBm|
|`optics_rx_power`|query|false|`number`|Receive power of the optics in dBm|
|`optics_module_temperature`|query|false|`number`|Temperature of the optics module in Celsius|
|`optics_module_voltage`|query|false|`number`|Voltage of the optics module in mV|
|`type`|query|false|`#/components/schemas/search_org_sw_or_gw_ports_type`|Type of device. enum: `switch`, `gateway`, `all`|
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

