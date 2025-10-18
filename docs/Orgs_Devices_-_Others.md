# Orgs Devices - Others API

## `GET /api/v1/orgs/{org_id}/otherdevices`

**Summary:** listOrgOtherDevices

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`vendor`|query|false|`string`||
|`mac`|query|false|`string`||
|`serial`|query|false|`string`||
|`model`|query|false|`string`||
|`name`|query|false|`string`||
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

## `PUT /api/v1/orgs/{org_id}/otherdevices`

**Summary:** updateOrgOtherDevices

**Request (raw array example)**

```json
{
  "macs": [
    "string_example"
  ],
  "op": "string_example",
  "site_id": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OtherDeviceUpdateMulti;

$model = new OtherDeviceUpdateMulti({
  "macs": [
    "string_example"
  ],
  "op": "string_example",
  "site_id": "string_example"
});
$resp = $client->orgs devices - others->updateOrgOtherDevices($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/otherdevices/events/count`

**Summary:** countOrgOtherDeviceEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_otherdevices_events_count_distinct`||
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

## `GET /api/v1/orgs/{org_id}/otherdevices/events/search`

**Summary:** searchOrgOtherDeviceEvents

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`site_id`|query|false|`string`|Site id|
|`mac`|query|false|`string`|MAC|
|`device_mac`|query|false|`string`|MAC of attached device|
|`model`|query|false|`string`|Device model|
|`vendor`|query|false|`string`|Vendor name|
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

## `GET /api/v1/orgs/{org_id}/otherdevices/{device_mac}`

**Summary:** getOrgOtherDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/otherdevices/{device_mac}`

**Summary:** updateOrgOtherDevice

**Request (raw array example)**

```json
{
  "device_mac": "string_example",
  "site_id": "43e9c864-a7e4-4310-8031-d9817d2c5a43"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OtherDeviceUpdate;

$model = new OtherDeviceUpdate({
  "device_mac": "string_example",
  "site_id": "43e9c864-a7e4-4310-8031-d9817d2c5a43"
});
$resp = $client->orgs devices - others->updateOrgOtherDevice($model->toArray());
print_r($resp);
```

**Responses**

- **200**: OK
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `DELETE /api/v1/orgs/{org_id}/otherdevices/{device_mac}`

**Summary:** deleteOrgOtherDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/otherdevices/{device_mac}/reboot`

**Summary:** rebootOrgOtherDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

