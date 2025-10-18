# Orgs SDK Templates API

## `GET /api/v1/orgs/{org_id}/sdktemplates`

**Summary:** listSdkTemplates

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/sdktemplates`

**Summary:** createSdkTemplate

**Request (raw array example)**

```json
{
  "bg_image": "string_example",
  "btn_flr_bgcolor": "string_example",
  "created_time": 1.23,
  "default": true,
  "for_site": true,
  "header_txt": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "search_txtcolor": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "welcome_msg": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Sdktemplate;

$model = new Sdktemplate({
  "bg_image": "string_example",
  "btn_flr_bgcolor": "string_example",
  "created_time": 1.23,
  "default": true,
  "for_site": true,
  "header_txt": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "search_txtcolor": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "welcome_msg": "string_example"
});
$resp = $client->orgs sdk templates->createSdkTemplate($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/sdktemplates/{sdktemplate_id}`

**Summary:** getSdkTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/sdktemplates/{sdktemplate_id}`

**Summary:** updateSdkTemplate

**Request (raw array example)**

```json
{
  "bg_image": "string_example",
  "btn_flr_bgcolor": "string_example",
  "created_time": 1.23,
  "default": true,
  "for_site": true,
  "header_txt": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "search_txtcolor": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "welcome_msg": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Sdktemplate;

$model = new Sdktemplate({
  "bg_image": "string_example",
  "btn_flr_bgcolor": "string_example",
  "created_time": 1.23,
  "default": true,
  "for_site": true,
  "header_txt": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "search_txtcolor": "string_example",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "welcome_msg": "string_example"
});
$resp = $client->orgs sdk templates->updateSdkTemplate($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/sdktemplates/{sdktemplate_id}`

**Summary:** deleteSdkTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

