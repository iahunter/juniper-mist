# Orgs SDK Invites API

## `POST /api/v1/mobile/verify/{secret}`

**Summary:** activateSdkInvite

**Request (raw array example)**

```json
{
  "device_id": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\DeviceIdString;

$model = new DeviceIdString({
  "device_id": "string_example"
});
$resp = $client->orgs sdk invites->activateSdkInvite($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/sdkinvites`

**Summary:** listSdkInvites

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/sdkinvites`

**Summary:** createSdkInvite

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "enabled": true,
  "expire_time": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "quota": 123,
  "quota_limited": true,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Sdkinvite;

$model = new Sdkinvite({
  "created_time": 1.23,
  "enabled": true,
  "expire_time": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "quota": 123,
  "quota_limited": true,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->orgs sdk invites->createSdkInvite($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}`

**Summary:** getSdkInvite

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}`

**Summary:** updateSdkInvite

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "enabled": true,
  "expire_time": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "quota": 123,
  "quota_limited": true,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Sdkinvite;

$model = new Sdkinvite({
  "created_time": 1.23,
  "enabled": true,
  "expire_time": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "quota": 123,
  "quota_limited": true,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->orgs sdk invites->updateSdkInvite($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}`

**Summary:** revokeSdkInvite

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}/email`

**Summary:** sendSdkInviteEmail

**Request (raw array example)**

```json
{
  "email": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\EmailString;

$model = new EmailString({
  "email": "string_example"
});
$resp = $client->orgs sdk invites->sendSdkInviteEmail($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}/qrcode`

**Summary:** getSdkInviteQrCode

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/sdkinvites/{sdkinvite_id}/sms`

**Summary:** sendSdkInviteSms

**Request (raw array example)**

```json
{
  "number": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SdkInviteSms;

$model = new SdkInviteSms({
  "number": "string_example"
});
$resp = $client->orgs sdk invites->sendSdkInviteSms($model->toArray());
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

