# Orgs Alarms API

## `POST /api/v1/orgs/{org_id}/alarms/ack`

**Summary:** ackOrgMultipleAlarms

**Request (raw array example)**

```json
{
  "alarm_ids": [
    "string_example"
  ],
  "note": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Alarms;

$model = new Alarms({
  "alarm_ids": [
    "string_example"
  ],
  "note": "string_example"
});
$resp = $client->orgs alarms->ackOrgMultipleAlarms($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/alarms/ack_all`

**Summary:** ackOrgAllAlarms

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
$resp = $client->orgs alarms->ackOrgAllAlarms($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/alarms/count`

**Summary:** countOrgAlarms

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`string`||
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

## `GET /api/v1/orgs/{org_id}/alarms/search`

**Summary:** searchOrgAlarms

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`site_id`|query|false|`string`|Site ID|
|`type`|query|false|`string`|Alarm type|
|`status`|query|false|`string`|Alarm status. Accepts multiple values separated by comma. enum: `open`, `resolved`|
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

## `POST /api/v1/orgs/{org_id}/alarms/unack`

**Summary:** unackOrgMultipleAlarms

**Request (raw array example)**

```json
{
  "alarm_ids": [
    "string_example"
  ],
  "note": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Alarms;

$model = new Alarms({
  "alarm_ids": [
    "string_example"
  ],
  "note": "string_example"
});
$resp = $client->orgs alarms->unackOrgMultipleAlarms($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/alarms/unack_all`

**Summary:** unackOrgAllAlarms

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
$resp = $client->orgs alarms->unackOrgAllAlarms($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/alarms/{alarm_id}/ack`

**Summary:** ackOrgAlarm

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
$resp = $client->orgs alarms->ackOrgAlarm($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/subscriptions`

**Summary:** subscribeOrgAlarmsReports

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `DELETE /api/v1/orgs/{org_id}/subscriptions`

**Summary:** unsubscribeOrgAlarmsReports

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

