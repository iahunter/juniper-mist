# Sites Devices API

## `GET /api/v1/sites/{site_id}/devices`

**Summary:** listSiteDevices

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_with_all`||
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

## `GET /api/v1/sites/{site_id}/devices/config_history/count`

**Summary:** countSiteDeviceConfigHistory

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`string`||
|`mac`|query|false|`string`||
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

## `GET /api/v1/sites/{site_id}/devices/config_history/search`

**Summary:** searchSiteDeviceConfigHistory

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_default_ap`||
|`mac`|query|false|`string`|Device MAC Address|
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

## `GET /api/v1/sites/{site_id}/devices/count`

**Summary:** countSiteDevices

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_devices_count_distinct`||
|`hostname`|query|false|`string`||
|`model`|query|false|`string`||
|`mac`|query|false|`string`||
|`version`|query|false|`string`||
|`mxtunnel_status`|query|false|`string`||
|`mxedge_id`|query|false|`string`||
|`lldp_system_name`|query|false|`string`||
|`lldp_system_desc`|query|false|`string`||
|`lldp_port_id`|query|false|`string`||
|`lldp_mgmt_addr`|query|false|`string`||
|`map_id`|query|false|`string`||
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

## `GET /api/v1/sites/{site_id}/devices/events/count`

**Summary:** countSiteDeviceEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_device_events_count_distinct`||
|`model`|query|false|`string`||
|`None`|None|false|``||
|`type_code`|query|false|`string`||
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

## `GET /api/v1/sites/{site_id}/devices/events/search`

**Summary:** searchSiteDeviceEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|Device mac|
|`model`|query|false|`string`|Device model|
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

## `GET /api/v1/sites/{site_id}/devices/export`

**Summary:** exportSiteDevices

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/import`

**Summary:** importSiteDevices

**Request (raw array example)**

```json
[
  {
    "aeroscout": {
      "enabled": true,
      "host": "aero.pvt.net",
      "locate_connected": true,
      "port": 123
    },
    "airista": {
      "enabled": true,
      "host": "airista.pvt.net",
      "port": 123
    },
    "ble_config": {
      "beacon_enabled": true,
      "beacon_rate": 3,
      "beacon_rate_mode": "custom",
      "beam_disabled": [
        123
      ],
      "custom_ble_packet_enabled": true,
      "custom_ble_packet_frame": "0x........",
      "custom_ble_packet_freq_msec": 300,
      "eddystone_uid_adv_power": -65,
      "eddystone_uid_beams": "2-4,7",
      "eddystone_uid_enabled": true,
      "eddystone_uid_freq_msec": 200,
      "eddystone_uid_instance": "5c5b35000001",
      "eddystone_uid_namespace": "2818e3868dec25629ede",
      "eddystone_url_adv_power": -65,
      "eddystone_url_beams": "2-4,7",
      "eddystone_url_enabled": true,
      "eddystone_url_freq_msec": 1000,
      "eddystone_url_url": "https://www.abc.com",
      "ibeacon_adv_power": -65,
      "ibeacon_beams": "2-4,7",
      "ibeacon_enabled": true,
      "ibeacon_freq_msec": 123,
      "ibeacon_major": 13,
      "ibeacon_minor": 138,
      "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
      "power": 6,
      "power_mode": "custom"
    },
    "centrak": {
      "enabled": true
    },
    "client_bridge": {
      "auth": {
        "psk": "foryoureyesonly",
        "type": "psk"
      },
      "enabled": true,
      "ssid": "Uplink-SSID"
    },
    "created_time": 1.23,
    "deviceprofile_id": "6f4bf402-45f9-2a56-6c8b-7f83d3bc98e9",
    "disable_eth1": true,
    "disable_eth2": true,
    "disable_eth3": true,
    "disable_module": true,
    "esl_config": {
      "cacert": "--BEGIN CERTIFICATE--\nMIIDXTCCAkWgAwIBAgIJAL5b1z4f3k2TMA0GCSqGSIb3DQEBCwUAMIGVMQsw\n",
      "channel": 3,
      "enabled": true,
      "host": "1.1.1.1",
      "port": 0,
      "type": "imagotag",
      "verify_cert": true,
      "vlan_id": 123
    },
    "flow_control": true,
    "for_site": true,
    "height": 2.75,
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "image1_url": "string_example",
    "image2_url": "string_example",
    "image3_url": "string_example",
    "iot_config": {
      "A1": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      },
      "A2": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      },
      "A3": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      },
      "A4": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      },
      "DI1": {
        "enabled": true,
        "name": "motion",
        "pullup": "string_example"
      },
      "DI2": {
        "enabled": true,
        "name": "motion",
        "pullup": "string_example"
      },
      "DO": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      }
    },
    "ip_config": {
      "dns": [
        "string_example"
      ],
      "dns_suffix": [
        "string_example"
      ],
      "gateway": "10.2.1.254",
      "gateway6": "2607:f8b0:4005:808::1",
      "ip": "10.2.1.1",
      "ip6": "2607:f8b0:4005:808::2004",
      "mtu": 0,
      "netmask": "255.255.255.0",
      "netmask6": "/32",
      "type": "static",
      "type6": "static",
      "vlan_id": 1
    },
    "lacp_config": {
      "enabled": true
    },
    "led": {
      "brightness": 255,
      "enabled": true
    },
    "locked": true,
    "mac": "string_example",
    "map_id": "63eda950-c6da-11e4-a628-60f81dd250cc",
    "mesh": {
      "bands": [
        "string_example"
      ],
      "enabled": true,
      "group": 1,
      "role": "base"
    },
    "model": "string_example",
    "modified_time": 1.23,
    "name": "conference room",
    "notes": "slightly off center",
    "ntp_servers": [
      "string_example"
    ],
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "orientation": 45,
    "poe_passthrough": true,
    "port_config": {},
    "pwr_config": {
      "base": 2000,
      "prefer_usb_over_wifi": true
    },
    "radio_config": {
      "allow_rrm_disable": true,
      "ant_gain_24": 4,
      "ant_gain_5": 5,
      "ant_gain_6": 5,
      "ant_mode": "external",
      "antenna_mode": "string_example",
      "band_24": {
        "allow_rrm_disable": true,
        "ant_gain": 123,
        "antenna_mode": "default",
        "bandwidth": 20,
        "channel": 6,
        "channels": [
          123
        ],
        "disabled": true,
        "power": 3,
        "power_max": 123,
        "power_min": 123,
        "preamble": "string_example"
      },
      "band_24_usage": "string_example",
      "band_5": {
        "allow_rrm_disable": true,
        "ant_gain": 123,
        "antenna_mode": "default",
        "bandwidth": 40,
        "channel": 100,
        "channels": [
          123
        ],
        "disabled": true,
        "power": 6,
        "power_max": 123,
        "power_min": 123,
        "preamble": "string_example"
      },
      "band_5_on_24_radio": {
        "allow_rrm_disable": true,
        "ant_gain": 123,
        "antenna_mode": "default",
        "bandwidth": 40,
        "channel": 100,
        "channels": [
          123
        ],
        "disabled": true,
        "power": 6,
        "power_max": 123,
        "power_min": 123,
        "preamble": "string_example"
      },
      "band_6": {
        "allow_rrm_disable": true,
        "ant_gain": 123,
        "antenna_mode": "default",
        "bandwidth": 80,
        "channel": 0,
        "channels": [
          123
        ],
        "disabled": true,
        "power": 7,
        "power_max": 123,
        "power_min": 123,
        "preamble": "string_example",
        "standard_power": true
      },
      "full_automatic_rrm": true,
      "indoor_use": true,
      "scanning_enabled": true
    },
    "serial": "string_example",
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "type": "string_example",
    "uplink_port_config": {
      "dot1x": true,
      "keep_wlans_up_if_down": true
    },
    "usb_config": {
      "cacert": "string_example",
      "channel": 3,
      "enabled": true,
      "host": "1.1.1.1",
      "port": 0,
      "type": "imagotag",
      "verify_cert": true,
      "vlan_id": 123
    },
    "vars": {},
    "x": 53.5,
    "y": 173.1
  }
]
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ApImportJson;

$model = new ApImportJson([
  {
    "aeroscout": {
      "enabled": true,
      "host": "aero.pvt.net",
      "locate_connected": true,
      "port": 123
    },
    "airista": {
      "enabled": true,
      "host": "airista.pvt.net",
      "port": 123
    },
    "ble_config": {
      "beacon_enabled": true,
      "beacon_rate": 3,
      "beacon_rate_mode": "custom",
      "beam_disabled": [
        123
      ],
      "custom_ble_packet_enabled": true,
      "custom_ble_packet_frame": "0x........",
      "custom_ble_packet_freq_msec": 300,
      "eddystone_uid_adv_power": -65,
      "eddystone_uid_beams": "2-4,7",
      "eddystone_uid_enabled": true,
      "eddystone_uid_freq_msec": 200,
      "eddystone_uid_instance": "5c5b35000001",
      "eddystone_uid_namespace": "2818e3868dec25629ede",
      "eddystone_url_adv_power": -65,
      "eddystone_url_beams": "2-4,7",
      "eddystone_url_enabled": true,
      "eddystone_url_freq_msec": 1000,
      "eddystone_url_url": "https://www.abc.com",
      "ibeacon_adv_power": -65,
      "ibeacon_beams": "2-4,7",
      "ibeacon_enabled": true,
      "ibeacon_freq_msec": 123,
      "ibeacon_major": 13,
      "ibeacon_minor": 138,
      "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
      "power": 6,
      "power_mode": "custom"
    },
    "centrak": {
      "enabled": true
    },
    "client_bridge": {
      "auth": {
        "psk": "foryoureyesonly",
        "type": "psk"
      },
      "enabled": true,
      "ssid": "Uplink-SSID"
    },
    "created_time": 1.23,
    "deviceprofile_id": "6f4bf402-45f9-2a56-6c8b-7f83d3bc98e9",
    "disable_eth1": true,
    "disable_eth2": true,
    "disable_eth3": true,
    "disable_module": true,
    "esl_config": {
      "cacert": "--BEGIN CERTIFICATE--\nMIIDXTCCAkWgAwIBAgIJAL5b1z4f3k2TMA0GCSqGSIb3DQEBCwUAMIGVMQsw\n",
      "channel": 3,
      "enabled": true,
      "host": "1.1.1.1",
      "port": 0,
      "type": "imagotag",
      "verify_cert": true,
      "vlan_id": 123
    },
    "flow_control": true,
    "for_site": true,
    "height": 2.75,
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "image1_url": "string_example",
    "image2_url": "string_example",
    "image3_url": "string_example",
    "iot_config": {
      "A1": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      },
      "A2": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      },
      "A3": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      },
      "A4": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      },
      "DI1": {
        "enabled": true,
        "name": "motion",
        "pullup": "string_example"
      },
      "DI2": {
        "enabled": true,
        "name": "motion",
        "pullup": "string_example"
      },
      "DO": {
        "enabled": true,
        "name": "motion",
        "output": true,
        "pullup": "string_example",
        "value": 0
      }
    },
    "ip_config": {
      "dns": [
        "string_example"
      ],
      "dns_suffix": [
        "string_example"
      ],
      "gateway": "10.2.1.254",
      "gateway6": "2607:f8b0:4005:808::1",
      "ip": "10.2.1.1",
      "ip6": "2607:f8b0:4005:808::2004",
      "mtu": 0,
      "netmask": "255.255.255.0",
      "netmask6": "/32",
      "type": "static",
      "type6": "static",
      "vlan_id": 1
    },
    "lacp_config": {
      "enabled": true
    },
    "led": {
      "brightness": 255,
      "enabled": true
    },
    "locked": true,
    "mac": "string_example",
    "map_id": "63eda950-c6da-11e4-a628-60f81dd250cc",
    "mesh": {
      "bands": [
        "string_example"
      ],
      "enabled": true,
      "group": 1,
      "role": "base"
    },
    "model": "string_example",
    "modified_time": 1.23,
    "name": "conference room",
    "notes": "slightly off center",
    "ntp_servers": [
      "string_example"
    ],
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "orientation": 45,
    "poe_passthrough": true,
    "port_config": {},
    "pwr_config": {
      "base": 2000,
      "prefer_usb_over_wifi": true
    },
    "radio_config": {
      "allow_rrm_disable": true,
      "ant_gain_24": 4,
      "ant_gain_5": 5,
      "ant_gain_6": 5,
      "ant_mode": "external",
      "antenna_mode": "string_example",
      "band_24": {
        "allow_rrm_disable": true,
        "ant_gain": 123,
        "antenna_mode": "default",
        "bandwidth": 20,
        "channel": 6,
        "channels": [
          123
        ],
        "disabled": true,
        "power": 3,
        "power_max": 123,
        "power_min": 123,
        "preamble": "string_example"
      },
      "band_24_usage": "string_example",
      "band_5": {
        "allow_rrm_disable": true,
        "ant_gain": 123,
        "antenna_mode": "default",
        "bandwidth": 40,
        "channel": 100,
        "channels": [
          123
        ],
        "disabled": true,
        "power": 6,
        "power_max": 123,
        "power_min": 123,
        "preamble": "string_example"
      },
      "band_5_on_24_radio": {
        "allow_rrm_disable": true,
        "ant_gain": 123,
        "antenna_mode": "default",
        "bandwidth": 40,
        "channel": 100,
        "channels": [
          123
        ],
        "disabled": true,
        "power": 6,
        "power_max": 123,
        "power_min": 123,
        "preamble": "string_example"
      },
      "band_6": {
        "allow_rrm_disable": true,
        "ant_gain": 123,
        "antenna_mode": "default",
        "bandwidth": 80,
        "channel": 0,
        "channels": [
          123
        ],
        "disabled": true,
        "power": 7,
        "power_max": 123,
        "power_min": 123,
        "preamble": "string_example",
        "standard_power": true
      },
      "full_automatic_rrm": true,
      "indoor_use": true,
      "scanning_enabled": true
    },
    "serial": "string_example",
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "type": "string_example",
    "uplink_port_config": {
      "dot1x": true,
      "keep_wlans_up_if_down": true
    },
    "usb_config": {
      "cacert": "string_example",
      "channel": 3,
      "enabled": true,
      "host": "1.1.1.1",
      "port": 0,
      "type": "imagotag",
      "verify_cert": true,
      "vlan_id": 123
    },
    "vars": {},
    "x": 53.5,
    "y": 173.1
  }
]);
$resp = $client->sites devices->importSiteDevices($model->toArray());
print_r($resp);
```

**Request (raw array example)**

```json
{
  "file": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\BinaryStream;

$model = new BinaryStream({
  "file": "string_example"
});
$resp = $client->sites devices->importSiteDevices($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/devices/last_config/count`

**Summary:** countSiteDeviceLastConfig

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_device_last_config_count_distinct`||
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

## `GET /api/v1/sites/{site_id}/devices/last_config/search`

**Summary:** searchSiteDeviceLastConfigs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`device_type`|query|false|`#/components/schemas/last_config_device_type`||
|`mac`|query|false|`string`||
|`version`|query|false|`string`||
|`name`|query|false|`string`||
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

## `GET /api/v1/sites/{site_id}/devices/search`

**Summary:** searchSiteDevices

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`hostname`|query|false|`string`|Partial / full hostname|
|`type`|query|false|`#/components/schemas/device_type_default_ap`||
|`model`|query|false|`string`|Device model|
|`mac`|query|false|`string`|Device MAC|
|`ext_ip`|query|false|`string`|Device external ip|
|`version`|query|false|`string`|Version|
|`power_constrained`|query|false|`boolean`|power_constrained|
|`None`|None|false|``||
|`mxtunnel_status`|query|false|`#/components/schemas/search_site_devices_mxtunnel_status`|For APs only, MxTunnel status, up / down.|
|`mxedge_id`|query|false|`string`|For APs only, Mist Edge id, if AP is connecting to a Mist Edge|
|`mxedge_ids`|query|false|`#/components/schemas/uuids`|For APs only, list of Mist Edge id, if AP is connecting to a Mist Edge|
|`last_hostname`|query|false|`string`|For Switches and Gateways only, last hostname|
|`last_config_status`|query|false|`string`|For Switches and Gateways only, last configuration status of the switch/gateway|
|`radius_stats`|query|false|`string`|For Switches and Gateways only, Key-value pairs where the key
is the RADIUS server address and the value contains authentication statistics:
  *  <server_address> (string): IP address of the RADIUS server as the key
  * `auth_accepts` (long): Number of accepted authentication requests
  * `auth_rejects` (long): Number of rejected authentication requests
  * `auth_timeouts` (long): Number of authentication timeouts
  * `auth_server_status` (string): Status of the server. Possible values: `up`, `down`, `unreachable`|
|`cpu`|query|false|`string`|For Switches and Gateways only, max cpu usage|
|`node0_mac`|query|false|`string`|For Gateways only, node0 MAC Address|
|`clustered`|query|false|`boolean`|For Gateways only|
|`t128agent_version`|query|false|`string`|For Gateways (SSR) only, version of 128T agent|
|`node1_mac`|query|false|`string`|For Gateways only, node1 MAC Address|
|`node`|query|false|`#/components/schemas/ha_cluster_node_enum`|For Gateways only. enum: `node0`, `node1`|
|`evpntopo_id`|query|false|`string`|For Switches only, EVPN topology id|
|`lldp_system_name`|query|false|`string`|For APs only, LLDP system name|
|`lldp_system_desc`|query|false|`string`|For APs only, LLDP system description|
|`lldp_port_id`|query|false|`string`|For APs only, LLDP port id|
|`lldp_mgmt_addr`|query|false|`string`|For APs only, LLDP management ip address|
|`band_24_channel`|query|false|`integer`|Channel of band_24|
|`band_5_channel`|query|false|`integer`|Channel of band_5|
|`band_6_channel`|query|false|`integer`|Channel of band_6|
|`band_24_bandwidth`|query|false|`integer`|Bandwidth of band_24|
|`band_5_bandwidth`|query|false|`integer`|Bandwidth of band_5|
|`band_6_bandwidth`|query|false|`integer`|Bandwidth of band_6|
|`eth0_port_speed`|query|false|`integer`|Port speed of eth0|
|`stats`|query|false|`boolean`|Whether to return device stats|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`sort`|query|false|`#/components/schemas/search_site_devices_sort`|Sort options|
|`desc_sort`|query|false|`#/components/schemas/search_site_devices_desc_sort`|Sort options in reverse order|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/devices/{device_id}`

**Summary:** getSiteDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/devices/{device_id}`

**Summary:** updateSiteDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/image{image_number}`

**Summary:** addSiteDeviceImage

**Request (raw array example)**

```json
{
  "file": "string_example",
  "json": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ImageImport;

$model = new ImageImport({
  "file": "string_example",
  "json": "string_example"
});
$resp = $client->sites devices->addSiteDeviceImage($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `DELETE /api/v1/sites/{site_id}/devices/{device_id}/image{image_number}`

**Summary:** deleteSiteDeviceImage

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/set_vc_port_mode`

**Summary:** changeSiteSwitchVcPortMode

**Request (raw array example)**

```json
{
  "mode": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\VcPort;

$model = new VcPort({
  "mode": "string_example"
});
$resp = $client->sites devices->changeSiteSwitchVcPortMode($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

