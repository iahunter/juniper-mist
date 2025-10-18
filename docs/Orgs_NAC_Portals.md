# Orgs NAC Portals API

## `GET /api/v1/orgs/{org_id}/nacportals`

**Summary:** listOrgNacPortals

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

## `POST /api/v1/orgs/{org_id}/nacportals`

**Summary:** createOrgNacPortal

**Request (raw array example)**

```json
{
  "access_type": "string_example",
  "bg_image_url": "string_example",
  "cert_expire_time": 365,
  "eap_type": "string_example",
  "enable_telemetry": true,
  "expiry_notification_time": 123,
  "name": "get-wifi",
  "notify_expiry": true,
  "portal": {
    "auth": "string_example",
    "expire": 1440,
    "external_portal_url": "https://yourorg.com/external-guest-portal",
    "force_reconnect": true,
    "forward": true,
    "forward_url": "https://yourorg.com/guest-portal-redirect",
    "portal_allowed_hostnames": [
      "string_example"
    ],
    "portal_allowed_subnets": [
      "string_example"
    ],
    "portal_denied_hostnames": [
      "string_example"
    ],
    "privacy": true
  },
  "portal_authorize_jwt_secret": "1234567890abcdef1234567890abcdef1234567890abcdef1234567890abcdef",
  "portal_authorize_url": "https://guest-mistnac.mist.com/callback/be22bba7-8e22-e1cf-5185-b880816fe2cf/authorize",
  "portal_sso_url": "https://guest-mistnac.mist.com/callback/be22bba7-8e22-e1cf-5185-b880816fe2cf/acs",
  "ssid": "Corp",
  "sso": {
    "idp_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
    "idp_sign_algo": "string_example",
    "idp_sso_url": "https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130",
    "issuer": "https://app.onelogin.com/saml/metadata/138130",
    "nameid_format": "email",
    "sso_role_matching": [
      {
        "assigned": "user",
        "match": "Student"
      }
    ],
    "use_sso_role_for_cert": true
  },
  "template_url": "string_example",
  "thumbnail_url": "string_example",
  "tos": "string_example",
  "type": "string_example",
  "ui_url": "https://guest-mistnac.mist.com/admin/51908ea7-dea7-4581-a578-f7320c4d5216/login"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NacPortal;

$model = new NacPortal({
  "access_type": "string_example",
  "bg_image_url": "string_example",
  "cert_expire_time": 365,
  "eap_type": "string_example",
  "enable_telemetry": true,
  "expiry_notification_time": 123,
  "name": "get-wifi",
  "notify_expiry": true,
  "portal": {
    "auth": "string_example",
    "expire": 1440,
    "external_portal_url": "https://yourorg.com/external-guest-portal",
    "force_reconnect": true,
    "forward": true,
    "forward_url": "https://yourorg.com/guest-portal-redirect",
    "portal_allowed_hostnames": [
      "string_example"
    ],
    "portal_allowed_subnets": [
      "string_example"
    ],
    "portal_denied_hostnames": [
      "string_example"
    ],
    "privacy": true
  },
  "portal_authorize_jwt_secret": "1234567890abcdef1234567890abcdef1234567890abcdef1234567890abcdef",
  "portal_authorize_url": "https://guest-mistnac.mist.com/callback/be22bba7-8e22-e1cf-5185-b880816fe2cf/authorize",
  "portal_sso_url": "https://guest-mistnac.mist.com/callback/be22bba7-8e22-e1cf-5185-b880816fe2cf/acs",
  "ssid": "Corp",
  "sso": {
    "idp_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
    "idp_sign_algo": "string_example",
    "idp_sso_url": "https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130",
    "issuer": "https://app.onelogin.com/saml/metadata/138130",
    "nameid_format": "email",
    "sso_role_matching": [
      {
        "assigned": "user",
        "match": "Student"
      }
    ],
    "use_sso_role_for_cert": true
  },
  "template_url": "string_example",
  "thumbnail_url": "string_example",
  "tos": "string_example",
  "type": "string_example",
  "ui_url": "https://guest-mistnac.mist.com/admin/51908ea7-dea7-4581-a578-f7320c4d5216/login"
});
$resp = $client->orgs nac portals->createOrgNacPortal($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/nacportals/{nacportal_id}`

**Summary:** getOrgNacPortal

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/nacportals/{nacportal_id}`

**Summary:** updateOrgNacPortal

**Request (raw array example)**

```json
{
  "access_type": "string_example",
  "bg_image_url": "string_example",
  "cert_expire_time": 365,
  "eap_type": "string_example",
  "enable_telemetry": true,
  "expiry_notification_time": 123,
  "name": "get-wifi",
  "notify_expiry": true,
  "portal": {
    "auth": "string_example",
    "expire": 1440,
    "external_portal_url": "https://yourorg.com/external-guest-portal",
    "force_reconnect": true,
    "forward": true,
    "forward_url": "https://yourorg.com/guest-portal-redirect",
    "portal_allowed_hostnames": [
      "string_example"
    ],
    "portal_allowed_subnets": [
      "string_example"
    ],
    "portal_denied_hostnames": [
      "string_example"
    ],
    "privacy": true
  },
  "portal_authorize_jwt_secret": "1234567890abcdef1234567890abcdef1234567890abcdef1234567890abcdef",
  "portal_authorize_url": "https://guest-mistnac.mist.com/callback/be22bba7-8e22-e1cf-5185-b880816fe2cf/authorize",
  "portal_sso_url": "https://guest-mistnac.mist.com/callback/be22bba7-8e22-e1cf-5185-b880816fe2cf/acs",
  "ssid": "Corp",
  "sso": {
    "idp_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
    "idp_sign_algo": "string_example",
    "idp_sso_url": "https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130",
    "issuer": "https://app.onelogin.com/saml/metadata/138130",
    "nameid_format": "email",
    "sso_role_matching": [
      {
        "assigned": "user",
        "match": "Student"
      }
    ],
    "use_sso_role_for_cert": true
  },
  "template_url": "string_example",
  "thumbnail_url": "string_example",
  "tos": "string_example",
  "type": "string_example",
  "ui_url": "https://guest-mistnac.mist.com/admin/51908ea7-dea7-4581-a578-f7320c4d5216/login"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NacPortal;

$model = new NacPortal({
  "access_type": "string_example",
  "bg_image_url": "string_example",
  "cert_expire_time": 365,
  "eap_type": "string_example",
  "enable_telemetry": true,
  "expiry_notification_time": 123,
  "name": "get-wifi",
  "notify_expiry": true,
  "portal": {
    "auth": "string_example",
    "expire": 1440,
    "external_portal_url": "https://yourorg.com/external-guest-portal",
    "force_reconnect": true,
    "forward": true,
    "forward_url": "https://yourorg.com/guest-portal-redirect",
    "portal_allowed_hostnames": [
      "string_example"
    ],
    "portal_allowed_subnets": [
      "string_example"
    ],
    "portal_denied_hostnames": [
      "string_example"
    ],
    "privacy": true
  },
  "portal_authorize_jwt_secret": "1234567890abcdef1234567890abcdef1234567890abcdef1234567890abcdef",
  "portal_authorize_url": "https://guest-mistnac.mist.com/callback/be22bba7-8e22-e1cf-5185-b880816fe2cf/authorize",
  "portal_sso_url": "https://guest-mistnac.mist.com/callback/be22bba7-8e22-e1cf-5185-b880816fe2cf/acs",
  "ssid": "Corp",
  "sso": {
    "idp_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
    "idp_sign_algo": "string_example",
    "idp_sso_url": "https://yourorg.onelogin.com/trust/saml2/http-post/sso/138130",
    "issuer": "https://app.onelogin.com/saml/metadata/138130",
    "nameid_format": "email",
    "sso_role_matching": [
      {
        "assigned": "user",
        "match": "Student"
      }
    ],
    "use_sso_role_for_cert": true
  },
  "template_url": "string_example",
  "thumbnail_url": "string_example",
  "tos": "string_example",
  "type": "string_example",
  "ui_url": "https://guest-mistnac.mist.com/admin/51908ea7-dea7-4581-a578-f7320c4d5216/login"
});
$resp = $client->orgs nac portals->updateOrgNacPortal($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/nacportals/{nacportal_id}`

**Summary:** deleteOrgNacPortal

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/nacportals/{nacportal_id}/failures`

**Summary:** listOrgNacPortalSsoLatestFailures

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

## `POST /api/v1/orgs/{org_id}/nacportals/{nacportal_id}/portal_image`

**Summary:** uploadOrgNacPortalImage

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
$resp = $client->orgs nac portals->uploadOrgNacPortalImage($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/nacportals/{nacportal_id}/portal_image`

**Summary:** deleteOrgNacPortalImage

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/nacportals/{nacportal_id}/portal_template`

**Summary:** updateOrgNacPortalTemplate

**Request (raw array example)**

```json
{
  "alignment": "string_example",
  "color": "string_example",
  "logo": "string_example",
  "poweredBy": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NacPortalTemplate;

$model = new NacPortalTemplate({
  "alignment": "string_example",
  "color": "string_example",
  "logo": "string_example",
  "poweredBy": true
});
$resp = $client->orgs nac portals->updateOrgNacPortalTemplate($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/nacportals/{nacportal_id}/saml_metadata`

**Summary:** getOrgNacPortalSamlMetadata

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/nacportals/{nacportal_id}/saml_metadata.xml`

**Summary:** downloadOrgNacPortalSamlMetadata

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

