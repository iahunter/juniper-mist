# Sites Assets API

## `GET /api/v1/sites/{site_id}/assets`

**Summary:** listSiteAssets

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

## `POST /api/v1/sites/{site_id}/assets`

**Summary:** createSiteAsset

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tag_id": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Asset;

$model = new Asset({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tag_id": "string_example"
});
$resp = $client->sites assets->createSiteAsset($model->toArray());
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

## `POST /api/v1/sites/{site_id}/assets/import`

**Summary:** importSiteAssets

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`upsert`|query|false|`#/components/schemas/import_site_assets_upsert`|API will replace the assets with same mac if provided `upsert`==`True`, otherwise will report in errors in response.|

**Request (raw array example)**

```json
[
  {
    "mac": "string_example",
    "name": "string_example"
  }
]
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AssetsImportJson;

$model = new AssetsImportJson([
  {
    "mac": "string_example",
    "name": "string_example"
  }
]);
$resp = $client->sites assets->importSiteAssets([], $model->toArray());
print_r($resp);
```

**Request (raw array example)**

```json
{
  "file": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AssetsImportFile;

$model = new AssetsImportFile({
  "file": "string_example"
});
$resp = $client->sites assets->importSiteAssets([], $model->toArray());
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

## `GET /api/v1/sites/{site_id}/assets/{asset_id}`

**Summary:** getSiteAsset

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/assets/{asset_id}`

**Summary:** updateSiteAsset

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tag_id": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Asset;

$model = new Asset({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mac": "string_example",
  "map_id": "string_example",
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tag_id": "string_example"
});
$resp = $client->sites assets->updateSiteAsset($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/assets/{asset_id}`

**Summary:** deleteSiteAsset

**Responses**

- **200**: 
- **201**: Created
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

