# Constants Models API

## `GET /api/v1/const/default_gateway_config`

**Summary:** getGatewayDefaultConfig

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`model`|query|true|`string`|Model the default gateway config is intended (as the default LAN/WAN port can differ)|
|`ha`|query|false|`string`|Whether the config is intended for HA|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/const/device_models`

**Summary:** listDeviceModels

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/const/mxedge_models`

**Summary:** listMxEdgeModels

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/const/otherdevice_models`

**Summary:** listSupportedOtherDeviceModels

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

