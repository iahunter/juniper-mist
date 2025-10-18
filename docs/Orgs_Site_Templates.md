# Orgs Site Templates API

## `GET /api/v1/orgs/{org_id}/sitetemplates`

**Summary:** listOrgSiteTemplates

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

## `POST /api/v1/orgs/{org_id}/sitetemplates`

**Summary:** createOrgSiteTemplate

**Request (raw array example)**

```json
{
  "auto_upgrade": {
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "string_example",
    "version": "string_example"
  },
  "name": "string_example",
  "vars": {}
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SiteTemplate;

$model = new SiteTemplate({
  "auto_upgrade": {
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "string_example",
    "version": "string_example"
  },
  "name": "string_example",
  "vars": {}
});
$resp = $client->orgs site templates->createOrgSiteTemplate($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/sitetemplates/{sitetemplate_id}`

**Summary:** getOrgSiteTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/sitetemplates/{sitetemplate_id}`

**Summary:** updateOrgSiteTemplate

**Request (raw array example)**

```json
{
  "auto_upgrade": {
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "string_example",
    "version": "string_example"
  },
  "name": "string_example",
  "vars": {}
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SiteTemplate;

$model = new SiteTemplate({
  "auto_upgrade": {
    "day_of_week": "string_example",
    "enabled": true,
    "time_of_day": "string_example",
    "version": "string_example"
  },
  "name": "string_example",
  "vars": {}
});
$resp = $client->orgs site templates->updateOrgSiteTemplate($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/sitetemplates/{sitetemplate_id}`

**Summary:** deleteOrgSiteTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

