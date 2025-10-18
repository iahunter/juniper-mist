# Orgs Maps API

## `POST /api/v1/orgs/{org_id}/maps/import`

**Summary:** importOrgMaps

**Request (raw array example)**

```json
{
  "auto_deviceprofile_assignment": true,
  "csv": "string_example",
  "file": "string_example",
  "json": {
    "import_all_floorplans": true,
    "import_height": true,
    "import_orientation": true,
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "vendor_name": "ekahau"
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MapOrgImportFile;

$model = new MapOrgImportFile({
  "auto_deviceprofile_assignment": true,
  "csv": "string_example",
  "file": "string_example",
  "json": {
    "import_all_floorplans": true,
    "import_height": true,
    "import_orientation": true,
    "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
    "vendor_name": "ekahau"
  }
});
$resp = $client->orgs maps->importOrgMaps($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/sites/{site_name}/maps/import`

**Summary:** importOrgMapToSite

**Request (raw array example)**

```json
{
  "auto_deviceprofile_assignment": true,
  "csv": "string_example",
  "file": "string_example",
  "json": {
    "import_all_floorplans": true,
    "import_height": true,
    "import_orientation": true,
    "vendor_name": "ekahau"
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MapSiteImportFile;

$model = new MapSiteImportFile({
  "auto_deviceprofile_assignment": true,
  "csv": "string_example",
  "file": "string_example",
  "json": {
    "import_all_floorplans": true,
    "import_height": true,
    "import_orientation": true,
    "vendor_name": "ekahau"
  }
});
$resp = $client->orgs maps->importOrgMapToSite($model->toArray());
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

