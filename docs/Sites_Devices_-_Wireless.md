# Sites Devices - Wireless API

## `GET /api/v1/sites/{site_id}/devices/ap_channels`

**Summary:** listSiteDeviceRadioChannels

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`country_code`|query|false|`string`|Country code for the site (for AP config generation), in [two-character](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/devices/{device_id}/iot`

**Summary:** getSiteDeviceIotPort

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/devices/{device_id}/iot`

**Summary:** setSiteDeviceIotPort

**Request (raw array example)**

```json
{}
```

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

