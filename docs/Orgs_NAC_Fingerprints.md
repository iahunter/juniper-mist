# Orgs NAC Fingerprints API

## `GET /api/v1/sites/{site_id}/insights/fingerprints/count`

**Summary:** countOrgClientFingerprints

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/fingerprints_count_distinct`||
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

## `GET /api/v1/sites/{site_id}/insights/fingerprints/search`

**Summary:** searchOrgClientFingerprints

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`family`|query|false|`string`|Device Category  of the client device|
|`client_type`|query|false|`#/components/schemas/nac_access_type`|Whether client is wired or wireless|
|`model`|query|false|`string`|Model name of the client device|
|`mfg`|query|false|`string`|Manufacturer name of the client device|
|`os`|query|false|`string`|Operating System name and version of the client device|
|`os_type`|query|false|`string`|Operating system name of the client device|
|`mac`|query|false|`string`|MAC address of the client device|
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

