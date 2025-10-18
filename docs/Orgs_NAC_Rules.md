# Orgs NAC Rules API

## `GET /api/v1/orgs/{org_id}/nacrules`

**Summary:** listOrgNacRules

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

## `POST /api/v1/orgs/{org_id}/nacrules`

**Summary:** createOrgNacRule

**Request (raw array example)**

```json
{
  "action": "allow",
  "apply_tags": [
    "string_example"
  ],
  "created_time": 1.23,
  "enabled": true,
  "guest_auth_state": "authorized",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "matching": {
    "auth_type": "eap-tls",
    "family": [
      "string_example"
    ],
    "mfg": [
      "string_example"
    ],
    "model": [
      "string_example"
    ],
    "nactags": [
      "string_example"
    ],
    "os_type": [
      "string_example"
    ],
    "port_types": [
      "string_example"
    ],
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ],
    "vendor": [
      "cisc"
    ]
  },
  "modified_time": 1.23,
  "name": "string_example",
  "not_matching": {
    "auth_type": "eap-tls",
    "family": [
      "string_example"
    ],
    "mfg": [
      "string_example"
    ],
    "model": [
      "string_example"
    ],
    "nactags": [
      "string_example"
    ],
    "os_type": [
      "string_example"
    ],
    "port_types": [
      "string_example"
    ],
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ],
    "vendor": [
      "cisc"
    ]
  },
  "order": 1,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NacRule;

$model = new NacRule({
  "action": "allow",
  "apply_tags": [
    "string_example"
  ],
  "created_time": 1.23,
  "enabled": true,
  "guest_auth_state": "authorized",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "matching": {
    "auth_type": "eap-tls",
    "family": [
      "string_example"
    ],
    "mfg": [
      "string_example"
    ],
    "model": [
      "string_example"
    ],
    "nactags": [
      "string_example"
    ],
    "os_type": [
      "string_example"
    ],
    "port_types": [
      "string_example"
    ],
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ],
    "vendor": [
      "cisc"
    ]
  },
  "modified_time": 1.23,
  "name": "string_example",
  "not_matching": {
    "auth_type": "eap-tls",
    "family": [
      "string_example"
    ],
    "mfg": [
      "string_example"
    ],
    "model": [
      "string_example"
    ],
    "nactags": [
      "string_example"
    ],
    "os_type": [
      "string_example"
    ],
    "port_types": [
      "string_example"
    ],
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ],
    "vendor": [
      "cisc"
    ]
  },
  "order": 1,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61"
});
$resp = $client->orgs nac rules->createOrgNacRule($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/nacrules/{nacrule_id}`

**Summary:** getOrgNacRule

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/nacrules/{nacrule_id}`

**Summary:** updateOrgNacRule

**Request (raw array example)**

```json
{
  "action": "allow",
  "apply_tags": [
    "string_example"
  ],
  "created_time": 1.23,
  "enabled": true,
  "guest_auth_state": "authorized",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "matching": {
    "auth_type": "eap-tls",
    "family": [
      "string_example"
    ],
    "mfg": [
      "string_example"
    ],
    "model": [
      "string_example"
    ],
    "nactags": [
      "string_example"
    ],
    "os_type": [
      "string_example"
    ],
    "port_types": [
      "string_example"
    ],
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ],
    "vendor": [
      "cisc"
    ]
  },
  "modified_time": 1.23,
  "name": "string_example",
  "not_matching": {
    "auth_type": "eap-tls",
    "family": [
      "string_example"
    ],
    "mfg": [
      "string_example"
    ],
    "model": [
      "string_example"
    ],
    "nactags": [
      "string_example"
    ],
    "os_type": [
      "string_example"
    ],
    "port_types": [
      "string_example"
    ],
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ],
    "vendor": [
      "cisc"
    ]
  },
  "order": 1,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NacRule;

$model = new NacRule({
  "action": "allow",
  "apply_tags": [
    "string_example"
  ],
  "created_time": 1.23,
  "enabled": true,
  "guest_auth_state": "authorized",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "matching": {
    "auth_type": "eap-tls",
    "family": [
      "string_example"
    ],
    "mfg": [
      "string_example"
    ],
    "model": [
      "string_example"
    ],
    "nactags": [
      "string_example"
    ],
    "os_type": [
      "string_example"
    ],
    "port_types": [
      "string_example"
    ],
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ],
    "vendor": [
      "cisc"
    ]
  },
  "modified_time": 1.23,
  "name": "string_example",
  "not_matching": {
    "auth_type": "eap-tls",
    "family": [
      "string_example"
    ],
    "mfg": [
      "string_example"
    ],
    "model": [
      "string_example"
    ],
    "nactags": [
      "string_example"
    ],
    "os_type": [
      "string_example"
    ],
    "port_types": [
      "string_example"
    ],
    "site_ids": [
      "string_example"
    ],
    "sitegroup_ids": [
      "string_example"
    ],
    "vendor": [
      "cisc"
    ]
  },
  "order": 1,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61"
});
$resp = $client->orgs nac rules->updateOrgNacRule($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/nacrules/{nacrule_id}`

**Summary:** deleteOrgNacRule

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

