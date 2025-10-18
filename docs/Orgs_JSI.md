# Orgs JSI API

## `GET /api/v1/orgs/{org_id}/jsi/devices`

**Summary:** listOrgJsiDevices

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`model`|query|false|`string`|Device model|
|`serial`|query|false|`string`|Device serial|
|`mac`|query|false|`string`|Device MAC Address|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/jsi/devices/outbound_ssh_cmd`

**Summary:** adoptOrgJsiDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/jsi/devices/{device_mac}/shell`

**Summary:** createOrgJsiDeviceShellSession

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/jsi/inventory`

**Summary:** listOrgJsiPastPurchases

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`model`|query|false|`string`||
|`serial`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/jsi/inventory/count`

**Summary:** countOrgJsiAssetsAndContracts

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/jsi_inventory_count_distinct`|Distinct attributes to count|
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/jsi/inventory/search`

**Summary:** searchOrgJsiAssetsAndContracts

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`model`|query|false|`string`|Device model|
|`serial`|query|false|`string`|Device serial|
|`sku`|query|false|`string`|SKU name of the device|
|`status`|query|false|`#/components/schemas/device_status`|Device status|
|`warranty_type`|query|false|`#/components/schemas/jsi_warranty_type`|Device warranty type|
|`eol_duration`|query|false|`string`|Device EOL duration in days|
|`eos_duration`|query|false|`string`|Device EOS duration in days|
|`text`|query|false|`string`|Wildcards for `model`, `serial`, `account_id`, `status`, `warranty_type`|
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

