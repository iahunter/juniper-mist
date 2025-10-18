# Orgs Sitegroups API

## `GET /api/v1/orgs/{org_id}/sitegroups`

**Summary:** listOrgSiteGroups

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

## `POST /api/v1/orgs/{org_id}/sitegroups`

**Summary:** createOrgSiteGroup

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_ids": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Sitegroup;

$model = new Sitegroup({
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_ids": [
    "string_example"
  ]
});
$resp = $client->orgs sitegroups->createOrgSiteGroup($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/sitegroups/{sitegroup_id}`

**Summary:** getOrgSiteGroup

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/sitegroups/{sitegroup_id}`

**Summary:** updateOrgSiteGroup

**Request (raw array example)**

```json
{
  "name": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NameString;

$model = new NameString({
  "name": "string_example"
});
$resp = $client->orgs sitegroups->updateOrgSiteGroup($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/sitegroups/{sitegroup_id}`

**Summary:** deleteOrgSiteGroup

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

