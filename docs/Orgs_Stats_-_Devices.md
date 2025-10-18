# Orgs Stats - Devices API

## `GET /api/v1/orgs/{org_id}/stats/devices`

**Summary:** listOrgDevicesStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_with_all`||
|`status`|query|false|`#/components/schemas/device_status`||
|`site_id`|query|false|`string`||
|`mac`|query|false|`string`||
|`evpntopo_id`|query|false|`string`|EVPN Topology ID|
|`evpn_unused`|query|false|`string`|If `evpn_unused`==`true`, find EVPN eligible switches which don’t belong to any EVPN Topology yet|
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

