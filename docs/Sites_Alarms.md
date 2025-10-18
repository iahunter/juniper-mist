# Sites Alarms API

## `POST /api/v1/sites/{site_id}/alarms/ack`

**Summary:** AckSiteMultipleAlarms

**Request (raw array example)**

```json
{
  "alarm_ids": [
    "string_example"
  ],
  "note": "maintenance window"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AlarmAck;

$model = new AlarmAck({
  "alarm_ids": [
    "string_example"
  ],
  "note": "maintenance window"
});
$resp = $client->sites alarms->AckSiteMultipleAlarms($model->toArray());
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

## `POST /api/v1/sites/{site_id}/alarms/ack_all`

**Summary:** ackSiteAllAlarms

**Request (raw array example)**

```json
{
  "note": "maintenance window"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NoteString;

$model = new NoteString({
  "note": "maintenance window"
});
$resp = $client->sites alarms->ackSiteAllAlarms($model->toArray());
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

## `GET /api/v1/sites/{site_id}/alarms/count`

**Summary:** countSiteAlarms

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/alarm_count_distinct`|Group by and count the alarms by some distinct field|
|`ack_admin_name`|query|false|`string`|Name of the admins who have acked the alarms; accepts multiple values separated by comma|
|`acked`|query|false|`boolean`||
|`type`|query|false|`string`|Key-name of the alarms; accepts multiple values separated by comma|
|`severity`|query|false|`string`|Alarm severity; accepts multiple values separated by comma|
|`group`|query|false|`string`|Alarm group name; accepts multiple values separated by comma|
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

## `GET /api/v1/sites/{site_id}/alarms/search`

**Summary:** searchSiteAlarms

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`string`|Key-name of the alarms; accepts multiple values separated by comma|
|`ack_admin_name`|query|false|`string`|Name of the admins who have acked the alarms; accepts multiple values separated by comma|
|`acked`|query|false|`boolean`||
|`severity`|query|false|`string`|Alarm severity; accepts multiple values separated by comma|
|`group`|query|false|`string`|Alarm group name; accepts multiple values separated by comma|
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

## `POST /api/v1/sites/{site_id}/alarms/unack`

**Summary:** unackSiteMultipleAlarms

**Request (raw array example)**

```json
{
  "alarm_ids": [
    "string_example"
  ],
  "note": "maintenance window"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AlarmAck;

$model = new AlarmAck({
  "alarm_ids": [
    "string_example"
  ],
  "note": "maintenance window"
});
$resp = $client->sites alarms->unackSiteMultipleAlarms($model->toArray());
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

## `POST /api/v1/sites/{site_id}/alarms/unack_all`

**Summary:** unackSiteAllAlarms

**Request (raw array example)**

```json
{
  "note": "maintenance window"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NoteString;

$model = new NoteString({
  "note": "maintenance window"
});
$resp = $client->sites alarms->unackSiteAllAlarms($model->toArray());
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

## `POST /api/v1/sites/{site_id}/alarms/{alarm_id}/ack`

**Summary:** ackSiteAlarm

**Request (raw array example)**

```json
{
  "note": "maintenance window"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NoteString;

$model = new NoteString({
  "note": "maintenance window"
});
$resp = $client->sites alarms->ackSiteAlarm($model->toArray());
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

## `POST /api/v1/sites/{site_id}/alarms/{alarm_id}/unack`

**Summary:** unackSiteAlarm

**Request (raw array example)**

```json
{
  "note": "maintenance window"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NoteString;

$model = new NoteString({
  "note": "maintenance window"
});
$resp = $client->sites alarms->unackSiteAlarm($model->toArray());
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

## `POST /api/v1/sites/{site_id}/subscriptions`

**Summary:** SubscribeSiteAlarms

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `DELETE /api/v1/sites/{site_id}/subscriptions`

**Summary:** UnsubscribeSiteAlarms

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

