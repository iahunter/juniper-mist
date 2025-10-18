# Orgs API Tokens API

## `GET /api/v1/orgs/{org_id}/apitokens`

**Summary:** listOrgApiTokens

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/apitokens`

**Summary:** createOrgApiToken

**Request (raw array example)**

```json
{
  "created_by": "user@mycorp.com",
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "key": "1qkb...QQCL",
  "last_used": 1690115110,
  "name": "org_token_xyz",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "privileges": [
    {
      "org_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "site_id": "string_example",
      "sitegroup_id": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "src_ips": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgApitoken;

$model = new OrgApitoken({
  "created_by": "user@mycorp.com",
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "key": "1qkb...QQCL",
  "last_used": 1690115110,
  "name": "org_token_xyz",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "privileges": [
    {
      "org_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "site_id": "string_example",
      "sitegroup_id": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "src_ips": [
    "string_example"
  ]
});
$resp = $client->orgs api tokens->createOrgApiToken($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/apitokens/{apitoken_id}`

**Summary:** getOrgApiToken

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/apitokens/{apitoken_id}`

**Summary:** updateOrgApiToken

**Request (raw array example)**

```json
{
  "created_by": "user@mycorp.com",
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "key": "1qkb...QQCL",
  "last_used": 1690115110,
  "name": "org_token_xyz",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "privileges": [
    {
      "org_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "site_id": "string_example",
      "sitegroup_id": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "src_ips": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgApitoken;

$model = new OrgApitoken({
  "created_by": "user@mycorp.com",
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "key": "1qkb...QQCL",
  "last_used": 1690115110,
  "name": "org_token_xyz",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "privileges": [
    {
      "org_id": "string_example",
      "role": "string_example",
      "scope": "string_example",
      "site_id": "string_example",
      "sitegroup_id": "string_example",
      "views": [
        "string_example"
      ]
    }
  ],
  "src_ips": [
    "string_example"
  ]
});
$resp = $client->orgs api tokens->updateOrgApiToken($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/apitokens/{apitoken_id}`

**Summary:** deleteOrgApiToken

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

