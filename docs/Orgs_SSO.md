# Orgs SSO API

## `GET /api/v1/orgs/{org_id}/ssos`

**Summary:** listOrgSsos

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

## `POST /api/v1/orgs/{org_id}/ssos`

**Summary:** createOrgSso

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "custom_logout_url": "string_example",
  "default_role": "string_example",
  "domain": "string_example",
  "group_filter": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "idp_cert": "string_example",
  "idp_sign_algo": "string_example",
  "idp_sso_url": "string_example",
  "idp_type": "string_example",
  "ignore_unmatched_roles": true,
  "issuer": "string_example",
  "ldap_base_dn": "DC=abc,DC=com",
  "ldap_bind_dn": "CN=nas,CN=users,DC=abc,DC=com",
  "ldap_bind_password": "secret",
  "ldap_cacerts": [
    "string_example"
  ],
  "ldap_client_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
  "ldap_client_key": "-----BEGIN PRI...",
  "ldap_group_attr": "string_example",
  "ldap_group_dn": "string_example",
  "ldap_resolve_groups": true,
  "ldap_server_hosts": [
    "string_example"
  ],
  "ldap_type": "string_example",
  "ldap_user_filter": "(mail=%s)",
  "member_filter": "(CN=%s)",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "mxedge_proxy": {
    "acct_servers": [
      {
        "host": "1.2.3.4",
        "port": 123,
        "secret": "testing123"
      }
    ],
    "auth_servers": [
      {
        "host": "1.2.3.4",
        "port": 123,
        "require_message_authenticator": true,
        "retry": 123,
        "secret": "testing123",
        "timeout": 123
      }
    ],
    "mxcluster_id": "572586b7-f97b-a22b-526c-8b97a3f609c4",
    "operator_name": "string_example",
    "proxy_hosts": [
      "string_example"
    ],
    "ssids": [
      "string_example"
    ]
  },
  "name": "string_example",
  "nameid_format": "string_example",
  "oauth_cc_client_id": "e60da615-7def-4c5a-8196-43675f45e174",
  "oauth_cc_client_secret": "akL8Q~5kWFMVFYl4TFZ3fi~7cMdyDONi6cj01cpH",
  "oauth_discovery_url": "string_example",
  "oauth_ping_identity_region": "string_example",
  "oauth_ropc_client_id": "9ce04c97-b5b1-4ec8-af17-f5ed42d2daf7",
  "oauth_ropc_client_secret": "blM9R~6kWFMVFYl4TFZ3fi~8cMdyDONi6cj01dqI",
  "oauth_tenant_id": "dev-88336535",
  "oauth_type": "string_example",
  "openroaming": {
    "ssids": [
      "string_example"
    ],
    "wba_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
  },
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "role_attr_extraction": "string_example",
  "role_attr_from": "string_example",
  "scim_enabled": true,
  "scim_secret_token": "FBitbKPE1aecSloPGBuqqPxDUrFeZyZk",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Sso;

$model = new Sso({
  "created_time": 1.23,
  "custom_logout_url": "string_example",
  "default_role": "string_example",
  "domain": "string_example",
  "group_filter": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "idp_cert": "string_example",
  "idp_sign_algo": "string_example",
  "idp_sso_url": "string_example",
  "idp_type": "string_example",
  "ignore_unmatched_roles": true,
  "issuer": "string_example",
  "ldap_base_dn": "DC=abc,DC=com",
  "ldap_bind_dn": "CN=nas,CN=users,DC=abc,DC=com",
  "ldap_bind_password": "secret",
  "ldap_cacerts": [
    "string_example"
  ],
  "ldap_client_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
  "ldap_client_key": "-----BEGIN PRI...",
  "ldap_group_attr": "string_example",
  "ldap_group_dn": "string_example",
  "ldap_resolve_groups": true,
  "ldap_server_hosts": [
    "string_example"
  ],
  "ldap_type": "string_example",
  "ldap_user_filter": "(mail=%s)",
  "member_filter": "(CN=%s)",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "mxedge_proxy": {
    "acct_servers": [
      {
        "host": "1.2.3.4",
        "port": 123,
        "secret": "testing123"
      }
    ],
    "auth_servers": [
      {
        "host": "1.2.3.4",
        "port": 123,
        "require_message_authenticator": true,
        "retry": 123,
        "secret": "testing123",
        "timeout": 123
      }
    ],
    "mxcluster_id": "572586b7-f97b-a22b-526c-8b97a3f609c4",
    "operator_name": "string_example",
    "proxy_hosts": [
      "string_example"
    ],
    "ssids": [
      "string_example"
    ]
  },
  "name": "string_example",
  "nameid_format": "string_example",
  "oauth_cc_client_id": "e60da615-7def-4c5a-8196-43675f45e174",
  "oauth_cc_client_secret": "akL8Q~5kWFMVFYl4TFZ3fi~7cMdyDONi6cj01cpH",
  "oauth_discovery_url": "string_example",
  "oauth_ping_identity_region": "string_example",
  "oauth_ropc_client_id": "9ce04c97-b5b1-4ec8-af17-f5ed42d2daf7",
  "oauth_ropc_client_secret": "blM9R~6kWFMVFYl4TFZ3fi~8cMdyDONi6cj01dqI",
  "oauth_tenant_id": "dev-88336535",
  "oauth_type": "string_example",
  "openroaming": {
    "ssids": [
      "string_example"
    ],
    "wba_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
  },
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "role_attr_extraction": "string_example",
  "role_attr_from": "string_example",
  "scim_enabled": true,
  "scim_secret_token": "FBitbKPE1aecSloPGBuqqPxDUrFeZyZk",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->orgs sso->createOrgSso($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/ssos/{sso_id}`

**Summary:** getOrgSso

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/ssos/{sso_id}`

**Summary:** updateOrgSso

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "custom_logout_url": "string_example",
  "default_role": "string_example",
  "domain": "string_example",
  "group_filter": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "idp_cert": "string_example",
  "idp_sign_algo": "string_example",
  "idp_sso_url": "string_example",
  "idp_type": "string_example",
  "ignore_unmatched_roles": true,
  "issuer": "string_example",
  "ldap_base_dn": "DC=abc,DC=com",
  "ldap_bind_dn": "CN=nas,CN=users,DC=abc,DC=com",
  "ldap_bind_password": "secret",
  "ldap_cacerts": [
    "string_example"
  ],
  "ldap_client_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
  "ldap_client_key": "-----BEGIN PRI...",
  "ldap_group_attr": "string_example",
  "ldap_group_dn": "string_example",
  "ldap_resolve_groups": true,
  "ldap_server_hosts": [
    "string_example"
  ],
  "ldap_type": "string_example",
  "ldap_user_filter": "(mail=%s)",
  "member_filter": "(CN=%s)",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "mxedge_proxy": {
    "acct_servers": [
      {
        "host": "1.2.3.4",
        "port": 123,
        "secret": "testing123"
      }
    ],
    "auth_servers": [
      {
        "host": "1.2.3.4",
        "port": 123,
        "require_message_authenticator": true,
        "retry": 123,
        "secret": "testing123",
        "timeout": 123
      }
    ],
    "mxcluster_id": "572586b7-f97b-a22b-526c-8b97a3f609c4",
    "operator_name": "string_example",
    "proxy_hosts": [
      "string_example"
    ],
    "ssids": [
      "string_example"
    ]
  },
  "name": "string_example",
  "nameid_format": "string_example",
  "oauth_cc_client_id": "e60da615-7def-4c5a-8196-43675f45e174",
  "oauth_cc_client_secret": "akL8Q~5kWFMVFYl4TFZ3fi~7cMdyDONi6cj01cpH",
  "oauth_discovery_url": "string_example",
  "oauth_ping_identity_region": "string_example",
  "oauth_ropc_client_id": "9ce04c97-b5b1-4ec8-af17-f5ed42d2daf7",
  "oauth_ropc_client_secret": "blM9R~6kWFMVFYl4TFZ3fi~8cMdyDONi6cj01dqI",
  "oauth_tenant_id": "dev-88336535",
  "oauth_type": "string_example",
  "openroaming": {
    "ssids": [
      "string_example"
    ],
    "wba_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
  },
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "role_attr_extraction": "string_example",
  "role_attr_from": "string_example",
  "scim_enabled": true,
  "scim_secret_token": "FBitbKPE1aecSloPGBuqqPxDUrFeZyZk",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Sso;

$model = new Sso({
  "created_time": 1.23,
  "custom_logout_url": "string_example",
  "default_role": "string_example",
  "domain": "string_example",
  "group_filter": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "idp_cert": "string_example",
  "idp_sign_algo": "string_example",
  "idp_sso_url": "string_example",
  "idp_type": "string_example",
  "ignore_unmatched_roles": true,
  "issuer": "string_example",
  "ldap_base_dn": "DC=abc,DC=com",
  "ldap_bind_dn": "CN=nas,CN=users,DC=abc,DC=com",
  "ldap_bind_password": "secret",
  "ldap_cacerts": [
    "string_example"
  ],
  "ldap_client_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----",
  "ldap_client_key": "-----BEGIN PRI...",
  "ldap_group_attr": "string_example",
  "ldap_group_dn": "string_example",
  "ldap_resolve_groups": true,
  "ldap_server_hosts": [
    "string_example"
  ],
  "ldap_type": "string_example",
  "ldap_user_filter": "(mail=%s)",
  "member_filter": "(CN=%s)",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "mxedge_proxy": {
    "acct_servers": [
      {
        "host": "1.2.3.4",
        "port": 123,
        "secret": "testing123"
      }
    ],
    "auth_servers": [
      {
        "host": "1.2.3.4",
        "port": 123,
        "require_message_authenticator": true,
        "retry": 123,
        "secret": "testing123",
        "timeout": 123
      }
    ],
    "mxcluster_id": "572586b7-f97b-a22b-526c-8b97a3f609c4",
    "operator_name": "string_example",
    "proxy_hosts": [
      "string_example"
    ],
    "ssids": [
      "string_example"
    ]
  },
  "name": "string_example",
  "nameid_format": "string_example",
  "oauth_cc_client_id": "e60da615-7def-4c5a-8196-43675f45e174",
  "oauth_cc_client_secret": "akL8Q~5kWFMVFYl4TFZ3fi~7cMdyDONi6cj01cpH",
  "oauth_discovery_url": "string_example",
  "oauth_ping_identity_region": "string_example",
  "oauth_ropc_client_id": "9ce04c97-b5b1-4ec8-af17-f5ed42d2daf7",
  "oauth_ropc_client_secret": "blM9R~6kWFMVFYl4TFZ3fi~8cMdyDONi6cj01dqI",
  "oauth_tenant_id": "dev-88336535",
  "oauth_type": "string_example",
  "openroaming": {
    "ssids": [
      "string_example"
    ],
    "wba_cert": "-----BEGIN CERTIFICATE-----\\nMIIFZjCCA06gAwIBAgIIP61/1qm/uDowDQYJKoZIhvcNAQELBQE\\n-----END CERTIFICATE-----"
  },
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "role_attr_extraction": "string_example",
  "role_attr_from": "string_example",
  "scim_enabled": true,
  "scim_secret_token": "FBitbKPE1aecSloPGBuqqPxDUrFeZyZk",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->orgs sso->updateOrgSso($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/ssos/{sso_id}`

**Summary:** deleteOrgSso

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/ssos/{sso_id}/failures`

**Summary:** listOrgSsoLatestFailures

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

## `GET /api/v1/orgs/{org_id}/ssos/{sso_id}/metadata`

**Summary:** getOrgSamlMetadata

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/ssos/{sso_id}/metadata.xml`

**Summary:** downloadOrgSamlMetadata

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

