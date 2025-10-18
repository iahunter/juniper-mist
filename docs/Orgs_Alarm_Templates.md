# Orgs Alarm Templates API

## `GET /api/v1/orgs/{org_id}/alarmtemplates`

**Summary:** listOrgAlarmTemplates

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `POST /api/v1/orgs/{org_id}/alarmtemplates`

**Summary:** createOrgAlarmTemplate

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "delivery": {
    "additional_emails": [
      "john@mycorp.com"
    ],
    "enabled": true,
    "to_org_admins": true,
    "to_site_admins": false
  },
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "default",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rules": {}
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AlarmTemplate;

$model = new AlarmTemplate({
  "created_time": 1.23,
  "delivery": {
    "additional_emails": [
      "john@mycorp.com"
    ],
    "enabled": true,
    "to_org_admins": true,
    "to_site_admins": false
  },
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "default",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rules": {}
});
$resp = $client->orgs alarm templates->createOrgAlarmTemplate($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/alarmtemplates/suppress`

**Summary:** listOrgSuppressedAlarms

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`scope`|query|false|`#/components/schemas/suppressed_alarm_scope`|Returns both scopes if not specified|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/alarmtemplates/suppress`

**Summary:** suppressOrgAlarm

**Request (raw array example)**

```json
{
  "applies": {
    "org_id": "string_example",
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "duration": 1.23,
  "scheduled_time": 123,
  "scope": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SuppressedAlarm;

$model = new SuppressedAlarm({
  "applies": {
    "org_id": "string_example",
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ]
  },
  "duration": 1.23,
  "scheduled_time": 123,
  "scope": "string_example"
});
$resp = $client->orgs alarm templates->suppressOrgAlarm($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/alarmtemplates/suppress`

**Summary:** unsuppressOrgSuppressedAlarms

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/alarmtemplates/{alarmtemplate_id}`

**Summary:** getOrgAlarmTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/alarmtemplates/{alarmtemplate_id}`

**Summary:** updateOrgAlarmTemplate

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "delivery": {
    "additional_emails": [
      "john@mycorp.com"
    ],
    "enabled": true,
    "to_org_admins": true,
    "to_site_admins": false
  },
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "default",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rules": {}
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AlarmTemplate;

$model = new AlarmTemplate({
  "created_time": 1.23,
  "delivery": {
    "additional_emails": [
      "john@mycorp.com"
    ],
    "enabled": true,
    "to_org_admins": true,
    "to_site_admins": false
  },
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "default",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rules": {}
});
$resp = $client->orgs alarm templates->updateOrgAlarmTemplate($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/alarmtemplates/{alarmtemplate_id}`

**Summary:** deleteOrgAlarmTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

