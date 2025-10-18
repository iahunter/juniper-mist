# Orgs Stats - Assets API

## `GET /api/v1/orgs/{org_id}/stats/assets`

**Summary:** listOrgAssetsStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `GET /api/v1/orgs/{org_id}/stats/assets/count`

**Summary:** countOrgAssetsByDistanceField

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_asset_count_distinct`||
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/stats/assets/search`

**Summary:** searchOrgAssets

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`site_id`|query|false|`string`||
|`mac`|query|false|`string`||
|`device_name`|query|false|`string`||
|`name`|query|false|`string`||
|`map_id`|query|false|`string`||
|`ibeacon_uuid`|query|false|`string`||
|`ibeacon_major`|query|false|`string`||
|`ibeacon_minor`|query|false|`string`||
|`eddystone_uid_namespace`|query|false|`string`||
|`eddystone_uid_instance`|query|false|`string`||
|`eddystone_url`|query|false|`string`||
|`ap_mac`|query|false|`string`||
|`beam`|query|false|`integer`||
|`rssi`|query|false|`integer`||
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

