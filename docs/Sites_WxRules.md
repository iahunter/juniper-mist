# Sites WxRules API

## `GET /api/v1/sites/{site_id}/wxrules`

**Summary:** listSiteWxRules

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

## `POST /api/v1/sites/{site_id}/wxrules`

**Summary:** createSiteWxRule

**Request (raw array example)**

```json
{
  "action": "allow",
  "apply_tags": [
    "c049dfcd-0c73-5014-1c64-062e9903f1e5"
  ],
  "blocked_apps": [
    "string_example"
  ],
  "created_time": 1.23,
  "dst_allow_wxtags": [
    "string_example"
  ],
  "dst_deny_wxtags": [
    "string_example"
  ],
  "dst_wxtags": [
    "string_example"
  ],
  "enabled": true,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "order": 1,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "src_wxtags": [
    "string_example"
  ],
  "template_id": "6aa54cbd-e039-4878-846a-04f270de8a5c"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WxlanRule;

$model = new WxlanRule({
  "action": "allow",
  "apply_tags": [
    "c049dfcd-0c73-5014-1c64-062e9903f1e5"
  ],
  "blocked_apps": [
    "string_example"
  ],
  "created_time": 1.23,
  "dst_allow_wxtags": [
    "string_example"
  ],
  "dst_deny_wxtags": [
    "string_example"
  ],
  "dst_wxtags": [
    "string_example"
  ],
  "enabled": true,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "order": 1,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "src_wxtags": [
    "string_example"
  ],
  "template_id": "6aa54cbd-e039-4878-846a-04f270de8a5c"
});
$resp = $client->sites wxrules->createSiteWxRule($model->toArray());
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

## `GET /api/v1/sites/{site_id}/wxrules/derived`

**Summary:** ListSiteWxRulesDerived

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/wxrules/{wxrule_id}`

**Summary:** getSiteWxRule

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/wxrules/{wxrule_id}`

**Summary:** updateSiteWxRule

**Request (raw array example)**

```json
{
  "action": "allow",
  "apply_tags": [
    "c049dfcd-0c73-5014-1c64-062e9903f1e5"
  ],
  "blocked_apps": [
    "string_example"
  ],
  "created_time": 1.23,
  "dst_allow_wxtags": [
    "string_example"
  ],
  "dst_deny_wxtags": [
    "string_example"
  ],
  "dst_wxtags": [
    "string_example"
  ],
  "enabled": true,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "order": 1,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "src_wxtags": [
    "string_example"
  ],
  "template_id": "6aa54cbd-e039-4878-846a-04f270de8a5c"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WxlanRule;

$model = new WxlanRule({
  "action": "allow",
  "apply_tags": [
    "c049dfcd-0c73-5014-1c64-062e9903f1e5"
  ],
  "blocked_apps": [
    "string_example"
  ],
  "created_time": 1.23,
  "dst_allow_wxtags": [
    "string_example"
  ],
  "dst_deny_wxtags": [
    "string_example"
  ],
  "dst_wxtags": [
    "string_example"
  ],
  "enabled": true,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "order": 1,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "src_wxtags": [
    "string_example"
  ],
  "template_id": "6aa54cbd-e039-4878-846a-04f270de8a5c"
});
$resp = $client->sites wxrules->updateSiteWxRule($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/wxrules/{wxrule_id}`

**Summary:** deleteSiteWxRule

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

