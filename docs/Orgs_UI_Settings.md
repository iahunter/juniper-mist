# Orgs UI Settings API

## `GET /api/v1/orgs/{org_id}/uisettings`

**Summary:** listOrgUiSettings

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/uisettings`

**Summary:** createOrgUiSettings

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "description": "This databoard shows AP stats",
  "for_site": false,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "isCustomDataboard": true,
  "modified_time": 1.23,
  "name": "AP Stats",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "purpose": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tiles": [
    {
      "description": "This tile shows the top 10 APs by bandwidth",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "isAutoTitle": true,
      "name": "Top 10 APs by Bandwidth",
      "nl_query": "List top 10 APs by bandwidth",
      "position": {
        "col": 1,
        "colSpan": 5,
        "row": 1,
        "rowSpan": 2
      }
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgUiSettings;

$model = new OrgUiSettings({
  "created_time": 1.23,
  "description": "This databoard shows AP stats",
  "for_site": false,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "isCustomDataboard": true,
  "modified_time": 1.23,
  "name": "AP Stats",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "purpose": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tiles": [
    {
      "description": "This tile shows the top 10 APs by bandwidth",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "isAutoTitle": true,
      "name": "Top 10 APs by Bandwidth",
      "nl_query": "List top 10 APs by bandwidth",
      "position": {
        "col": 1,
        "colSpan": 5,
        "row": 1,
        "rowSpan": 2
      }
    }
  ]
});
$resp = $client->orgs ui settings->createOrgUiSettings($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/uisettings/{uisetting_id}`

**Summary:** getOrgUiSetting

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/uisettings/{uisetting_id}`

**Summary:** updateOrgUiSetting

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "description": "This databoard shows AP stats",
  "for_site": false,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "isCustomDataboard": true,
  "modified_time": 1.23,
  "name": "AP Stats",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "purpose": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tiles": [
    {
      "description": "This tile shows the top 10 APs by bandwidth",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "isAutoTitle": true,
      "name": "Top 10 APs by Bandwidth",
      "nl_query": "List top 10 APs by bandwidth",
      "position": {
        "col": 1,
        "colSpan": 5,
        "row": 1,
        "rowSpan": 2
      }
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\OrgUiSettings;

$model = new OrgUiSettings({
  "created_time": 1.23,
  "description": "This databoard shows AP stats",
  "for_site": false,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "isCustomDataboard": true,
  "modified_time": 1.23,
  "name": "AP Stats",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "purpose": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tiles": [
    {
      "description": "This tile shows the top 10 APs by bandwidth",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "isAutoTitle": true,
      "name": "Top 10 APs by Bandwidth",
      "nl_query": "List top 10 APs by bandwidth",
      "position": {
        "col": 1,
        "colSpan": 5,
        "row": 1,
        "rowSpan": 2
      }
    }
  ]
});
$resp = $client->orgs ui settings->updateOrgUiSetting($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/uisettings/{uisetting_id}`

**Summary:** deleteOrgUiSetting

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

