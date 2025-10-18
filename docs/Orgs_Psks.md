# Orgs Psks API

## `GET /api/v1/orgs/{org_id}/psks`

**Summary:** listOrgPsks

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`name`|query|false|`string`||
|`ssid`|query|false|`string`||
|`role`|query|false|`string`||
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

## `POST /api/v1/orgs/{org_id}/psks`

**Summary:** createOrgPsk

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`upsert`|query|false|`boolean`|If a key exists with the same `name`, replace it with the new one|

**Request (raw array example)**

```json
{
  "admin_sso_id": "string_example",
  "created_time": 1.23,
  "email": "string_example",
  "expire_time": 1614990263,
  "expiry_notification_time": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "macs": [
    "string_example"
  ],
  "max_usage": 123,
  "modified_time": 1.23,
  "name": "string_example",
  "note": "string_example",
  "notify_expiry": true,
  "notify_on_create_or_edit": true,
  "old_passphrase": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "passphrase": "string_example",
  "role": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "ssid": "string_example",
  "usage": "string_example",
  "vlan_id": null
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Psk;

$model = new Psk({
  "admin_sso_id": "string_example",
  "created_time": 1.23,
  "email": "string_example",
  "expire_time": 1614990263,
  "expiry_notification_time": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "macs": [
    "string_example"
  ],
  "max_usage": 123,
  "modified_time": 1.23,
  "name": "string_example",
  "note": "string_example",
  "notify_expiry": true,
  "notify_on_create_or_edit": true,
  "old_passphrase": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "passphrase": "string_example",
  "role": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "ssid": "string_example",
  "usage": "string_example",
  "vlan_id": null
});
$resp = $client->orgs psks->createOrgPsk([], $model->toArray());
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

## `PUT /api/v1/orgs/{org_id}/psks`

**Summary:** updateOrgMultiplePsks

**Request (raw array example)**

```json
[
  {
    "admin_sso_id": "string_example",
    "created_time": 1.23,
    "email": "string_example",
    "expire_time": 1614990263,
    "expiry_notification_time": 123,
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "mac": "string_example",
    "macs": [
      "string_example"
    ],
    "max_usage": 123,
    "modified_time": 1.23,
    "name": "string_example",
    "note": "string_example",
    "notify_expiry": true,
    "notify_on_create_or_edit": true,
    "old_passphrase": "string_example",
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "passphrase": "string_example",
    "role": "string_example",
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "ssid": "string_example",
    "usage": "string_example",
    "vlan_id": null
  }
]
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Psks;

$model = new Psks([
  {
    "admin_sso_id": "string_example",
    "created_time": 1.23,
    "email": "string_example",
    "expire_time": 1614990263,
    "expiry_notification_time": 123,
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "mac": "string_example",
    "macs": [
      "string_example"
    ],
    "max_usage": 123,
    "modified_time": 1.23,
    "name": "string_example",
    "note": "string_example",
    "notify_expiry": true,
    "notify_on_create_or_edit": true,
    "old_passphrase": "string_example",
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "passphrase": "string_example",
    "role": "string_example",
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "ssid": "string_example",
    "usage": "string_example",
    "vlan_id": null
  }
]);
$resp = $client->orgs psks->updateOrgMultiplePsks($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/psks/delete`

**Summary:** deleteOrgPskList

**Request (raw array example)**

```json
{
  "psk_ids": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\PskIdList;

$model = new PskIdList({
  "psk_ids": [
    "string_example"
  ]
});
$resp = $client->orgs psks->deleteOrgPskList($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/psks/import`

**Summary:** importOrgPsks

**Request (raw array example)**

```json
[
  {
    "admin_sso_id": "string_example",
    "created_time": 1.23,
    "email": "string_example",
    "expire_time": 1614990263,
    "expiry_notification_time": 123,
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "mac": "string_example",
    "macs": [
      "string_example"
    ],
    "max_usage": 123,
    "modified_time": 1.23,
    "name": "string_example",
    "note": "string_example",
    "notify_expiry": true,
    "notify_on_create_or_edit": true,
    "old_passphrase": "string_example",
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "passphrase": "string_example",
    "role": "string_example",
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "ssid": "string_example",
    "usage": "string_example",
    "vlan_id": null
  }
]
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Psks;

$model = new Psks([
  {
    "admin_sso_id": "string_example",
    "created_time": 1.23,
    "email": "string_example",
    "expire_time": 1614990263,
    "expiry_notification_time": 123,
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "mac": "string_example",
    "macs": [
      "string_example"
    ],
    "max_usage": 123,
    "modified_time": 1.23,
    "name": "string_example",
    "note": "string_example",
    "notify_expiry": true,
    "notify_on_create_or_edit": true,
    "old_passphrase": "string_example",
    "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
    "passphrase": "string_example",
    "role": "string_example",
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "ssid": "string_example",
    "usage": "string_example",
    "vlan_id": null
  }
]);
$resp = $client->orgs psks->importOrgPsks($model->toArray());
print_r($resp);
```

**Request (raw array example)**

```json
{
  "file": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\PsksImportFile;

$model = new PsksImportFile({
  "file": "string_example"
});
$resp = $client->orgs psks->importOrgPsks($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/psks/{psk_id}`

**Summary:** getOrgPsk

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/psks/{psk_id}`

**Summary:** updateOrgPsk

**Request (raw array example)**

```json
{
  "admin_sso_id": "string_example",
  "created_time": 1.23,
  "email": "string_example",
  "expire_time": 1614990263,
  "expiry_notification_time": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "macs": [
    "string_example"
  ],
  "max_usage": 123,
  "modified_time": 1.23,
  "name": "string_example",
  "note": "string_example",
  "notify_expiry": true,
  "notify_on_create_or_edit": true,
  "old_passphrase": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "passphrase": "string_example",
  "role": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "ssid": "string_example",
  "usage": "string_example",
  "vlan_id": null
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Psk;

$model = new Psk({
  "admin_sso_id": "string_example",
  "created_time": 1.23,
  "email": "string_example",
  "expire_time": 1614990263,
  "expiry_notification_time": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "macs": [
    "string_example"
  ],
  "max_usage": 123,
  "modified_time": 1.23,
  "name": "string_example",
  "note": "string_example",
  "notify_expiry": true,
  "notify_on_create_or_edit": true,
  "old_passphrase": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "passphrase": "string_example",
  "role": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "ssid": "string_example",
  "usage": "string_example",
  "vlan_id": null
});
$resp = $client->orgs psks->updateOrgPsk($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/psks/{psk_id}`

**Summary:** deleteOrgPsk

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/psks/{psk_id}/delete_old_passphrase`

**Summary:** deleteOrgPskOldPassphrase

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

