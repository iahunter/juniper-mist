# Orgs Psk Portals API

## `GET /api/v1/orgs/{org_id}/pskportals`

**Summary:** listOrgPskPortals

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

## `POST /api/v1/orgs/{org_id}/pskportals`

**Summary:** createOrgPskPortal

**Request (raw array example)**

```json
{
  "auth": "string_example",
  "bg_image_url": "string_example",
  "cleanup_psk": true,
  "created_time": 1.23,
  "expire_time": 123,
  "expiry_notification_time": 123,
  "hide_psks_created_by_other_admins": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_usage": 123,
  "modified_time": 1.23,
  "name": "string_example",
  "notification_renew_url": "https://custom-sso/url",
  "notify_expiry": true,
  "notify_on_create_or_edit": true,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "passphrase_rules": {
    "alphaberts_enabled": true,
    "length": 123,
    "max_length": 123,
    "min_length": 123,
    "numerics_enabled": true,
    "symbols": "()[]{}_%@#&$",
    "symbols_enabled": true
  },
  "required_fields": [
    "string_example"
  ],
  "role": "string_example",
  "ssid": "string_example",
  "sso": {
    "allowed_roles": [
      "string_example"
    ],
    "idp_cert": "string_example",
    "idp_sign_algo": "string_example",
    "idp_sso_url": "string_example",
    "issuer": "string_example",
    "nameid_format": "string_example",
    "role_mapping": {},
    "use_sso_role_for_psk_role": true
  },
  "template_url": "string_example",
  "thumbnail_url": "string_example",
  "type": "string_example",
  "vlan_id": null
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\PskPortal;

$model = new PskPortal({
  "auth": "string_example",
  "bg_image_url": "string_example",
  "cleanup_psk": true,
  "created_time": 1.23,
  "expire_time": 123,
  "expiry_notification_time": 123,
  "hide_psks_created_by_other_admins": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_usage": 123,
  "modified_time": 1.23,
  "name": "string_example",
  "notification_renew_url": "https://custom-sso/url",
  "notify_expiry": true,
  "notify_on_create_or_edit": true,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "passphrase_rules": {
    "alphaberts_enabled": true,
    "length": 123,
    "max_length": 123,
    "min_length": 123,
    "numerics_enabled": true,
    "symbols": "()[]{}_%@#&$",
    "symbols_enabled": true
  },
  "required_fields": [
    "string_example"
  ],
  "role": "string_example",
  "ssid": "string_example",
  "sso": {
    "allowed_roles": [
      "string_example"
    ],
    "idp_cert": "string_example",
    "idp_sign_algo": "string_example",
    "idp_sso_url": "string_example",
    "issuer": "string_example",
    "nameid_format": "string_example",
    "role_mapping": {},
    "use_sso_role_for_psk_role": true
  },
  "template_url": "string_example",
  "thumbnail_url": "string_example",
  "type": "string_example",
  "vlan_id": null
});
$resp = $client->orgs psk portals->createOrgPskPortal($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/pskportals/logs`

**Summary:** listOrgPskPortalLogs

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

## `GET /api/v1/orgs/{org_id}/pskportals/logs/count`

**Summary:** countOrgPskPortalLogs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_psk_portal_logs_count_distinct`||
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

## `GET /api/v1/orgs/{org_id}/pskportals/logs/search`

**Summary:** searchOrgPskPortalLogs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`psk_name`|query|false|`string`||
|`psk_id`|query|false|`string`||
|`pskportal_id`|query|false|`string`||
|`id`|query|false|`string`|audit_id|
|`admin_name`|query|false|`string`||
|`admin_id`|query|false|`string`||
|`name_id`|query|false|`string`|Name_id used in SSO|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/pskportals/{pskportal_id}`

**Summary:** getOrgPskPortal

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/pskportals/{pskportal_id}`

**Summary:** updateOrgPskPortal

**Request (raw array example)**

```json
{
  "auth": "string_example",
  "bg_image_url": "string_example",
  "cleanup_psk": true,
  "created_time": 1.23,
  "expire_time": 123,
  "expiry_notification_time": 123,
  "hide_psks_created_by_other_admins": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_usage": 123,
  "modified_time": 1.23,
  "name": "string_example",
  "notification_renew_url": "https://custom-sso/url",
  "notify_expiry": true,
  "notify_on_create_or_edit": true,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "passphrase_rules": {
    "alphaberts_enabled": true,
    "length": 123,
    "max_length": 123,
    "min_length": 123,
    "numerics_enabled": true,
    "symbols": "()[]{}_%@#&$",
    "symbols_enabled": true
  },
  "required_fields": [
    "string_example"
  ],
  "role": "string_example",
  "ssid": "string_example",
  "sso": {
    "allowed_roles": [
      "string_example"
    ],
    "idp_cert": "string_example",
    "idp_sign_algo": "string_example",
    "idp_sso_url": "string_example",
    "issuer": "string_example",
    "nameid_format": "string_example",
    "role_mapping": {},
    "use_sso_role_for_psk_role": true
  },
  "template_url": "string_example",
  "thumbnail_url": "string_example",
  "type": "string_example",
  "vlan_id": null
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\PskPortal;

$model = new PskPortal({
  "auth": "string_example",
  "bg_image_url": "string_example",
  "cleanup_psk": true,
  "created_time": 1.23,
  "expire_time": 123,
  "expiry_notification_time": 123,
  "hide_psks_created_by_other_admins": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_usage": 123,
  "modified_time": 1.23,
  "name": "string_example",
  "notification_renew_url": "https://custom-sso/url",
  "notify_expiry": true,
  "notify_on_create_or_edit": true,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "passphrase_rules": {
    "alphaberts_enabled": true,
    "length": 123,
    "max_length": 123,
    "min_length": 123,
    "numerics_enabled": true,
    "symbols": "()[]{}_%@#&$",
    "symbols_enabled": true
  },
  "required_fields": [
    "string_example"
  ],
  "role": "string_example",
  "ssid": "string_example",
  "sso": {
    "allowed_roles": [
      "string_example"
    ],
    "idp_cert": "string_example",
    "idp_sign_algo": "string_example",
    "idp_sso_url": "string_example",
    "issuer": "string_example",
    "nameid_format": "string_example",
    "role_mapping": {},
    "use_sso_role_for_psk_role": true
  },
  "template_url": "string_example",
  "thumbnail_url": "string_example",
  "type": "string_example",
  "vlan_id": null
});
$resp = $client->orgs psk portals->updateOrgPskPortal($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/pskportals/{pskportal_id}`

**Summary:** deleteOrgPskPortal

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/pskportals/{pskportal_id}/portal_image`

**Summary:** uploadOrgPskPortalImage

**Request (raw array example)**

```json
{
  "file": "string_example",
  "json": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\PskPortalImage;

$model = new PskPortalImage({
  "file": "string_example",
  "json": "string_example"
});
$resp = $client->orgs psk portals->uploadOrgPskPortalImage($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/pskportals/{pskportal_id}/portal_image`

**Summary:** deleteOrgPskPortalImage

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/pskportals/{pskportal_id}/portal_template`

**Summary:** updateOrgPskPortalTemplate

**Request (raw array example)**

```json
{
  "alignment": "string_example",
  "color": "string_example",
  "logo": "string_example",
  "poweredBy": true,
  "tos": true,
  "tosAcceptLabel": "string_example",
  "tosError": "string_example",
  "tosLink": "string_example",
  "tosText": "string_example",
  "tosUrl": "https://company.com/wifi-policy"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\PskPortalTemplate;

$model = new PskPortalTemplate({
  "alignment": "string_example",
  "color": "string_example",
  "logo": "string_example",
  "poweredBy": true,
  "tos": true,
  "tosAcceptLabel": "string_example",
  "tosError": "string_example",
  "tosLink": "string_example",
  "tosText": "string_example",
  "tosUrl": "https://company.com/wifi-policy"
});
$resp = $client->orgs psk portals->updateOrgPskPortalTemplate($model->toArray());
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

