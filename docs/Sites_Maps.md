# Sites Maps API

## `GET /api/v1/sites/{site_id}/maps`

**Summary:** listSiteMaps

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

## `POST /api/v1/sites/{site_id}/maps`

**Summary:** createSiteMap

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "flags": {},
  "for_site": true,
  "height": 1500,
  "height_m": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "latlng_br": {
    "lat": "string_example",
    "lng": "string_example"
  },
  "latlng_tl": {
    "lat": "string_example",
    "lng": "string_example"
  },
  "locked": true,
  "modified_time": 1.23,
  "name": "Mist Office",
  "occupancy_limit": 123,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "orientation": 30,
  "origin_x": 35,
  "origin_y": 60,
  "ppm": 40.94,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "sitesurvey_path": [
    {
      "coordinate": "actual",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "name": "Default",
      "nodes": [
        {
          "edges": {},
          "name": "N1",
          "position": {
            "x": 746,
            "y": 104
          }
        }
      ]
    }
  ],
  "thumbnail_url": "https://url/to/image.png",
  "type": "image",
  "url": "https://url/to/image.png",
  "view": "string_example",
  "wall_path": {
    "coordinate": "actual",
    "nodes": [
      {
        "edges": {},
        "name": "N1",
        "position": {
          "x": 746,
          "y": 104
        }
      }
    ]
  },
  "wayfinding": {
    "micello": {
      "account_key": "adasdf",
      "default_level_id": 5,
      "map_id": "c660f81dd250c"
    },
    "snap_to_path": true
  },
  "wayfinding_path": {
    "coordinate": "actual",
    "nodes": [
      {
        "edges": {},
        "name": "N1",
        "position": {
          "x": 746,
          "y": 104
        }
      }
    ]
  },
  "width": 1250,
  "width_m": 1.23
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Map;

$model = new Map({
  "created_time": 1.23,
  "flags": {},
  "for_site": true,
  "height": 1500,
  "height_m": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "latlng_br": {
    "lat": "string_example",
    "lng": "string_example"
  },
  "latlng_tl": {
    "lat": "string_example",
    "lng": "string_example"
  },
  "locked": true,
  "modified_time": 1.23,
  "name": "Mist Office",
  "occupancy_limit": 123,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "orientation": 30,
  "origin_x": 35,
  "origin_y": 60,
  "ppm": 40.94,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "sitesurvey_path": [
    {
      "coordinate": "actual",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "name": "Default",
      "nodes": [
        {
          "edges": {},
          "name": "N1",
          "position": {
            "x": 746,
            "y": 104
          }
        }
      ]
    }
  ],
  "thumbnail_url": "https://url/to/image.png",
  "type": "image",
  "url": "https://url/to/image.png",
  "view": "string_example",
  "wall_path": {
    "coordinate": "actual",
    "nodes": [
      {
        "edges": {},
        "name": "N1",
        "position": {
          "x": 746,
          "y": 104
        }
      }
    ]
  },
  "wayfinding": {
    "micello": {
      "account_key": "adasdf",
      "default_level_id": 5,
      "map_id": "c660f81dd250c"
    },
    "snap_to_path": true
  },
  "wayfinding_path": {
    "coordinate": "actual",
    "nodes": [
      {
        "edges": {},
        "name": "N1",
        "position": {
          "x": 746,
          "y": 104
        }
      }
    ]
  },
  "width": 1250,
  "width_m": 1.23
});
$resp = $client->sites maps->createSiteMap($model->toArray());
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

## `POST /api/v1/sites/{site_id}/maps/import`

**Summary:** importSiteMaps

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
$resp = $client->sites maps->importSiteMaps($model->toArray());
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

## `GET /api/v1/sites/{site_id}/maps/{map_id}`

**Summary:** getSiteMap

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/maps/{map_id}`

**Summary:** updateSiteMap

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "flags": {},
  "for_site": true,
  "height": 1500,
  "height_m": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "latlng_br": {
    "lat": "string_example",
    "lng": "string_example"
  },
  "latlng_tl": {
    "lat": "string_example",
    "lng": "string_example"
  },
  "locked": true,
  "modified_time": 1.23,
  "name": "Mist Office",
  "occupancy_limit": 123,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "orientation": 30,
  "origin_x": 35,
  "origin_y": 60,
  "ppm": 40.94,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "sitesurvey_path": [
    {
      "coordinate": "actual",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "name": "Default",
      "nodes": [
        {
          "edges": {},
          "name": "N1",
          "position": {
            "x": 746,
            "y": 104
          }
        }
      ]
    }
  ],
  "thumbnail_url": "https://url/to/image.png",
  "type": "image",
  "url": "https://url/to/image.png",
  "view": "string_example",
  "wall_path": {
    "coordinate": "actual",
    "nodes": [
      {
        "edges": {},
        "name": "N1",
        "position": {
          "x": 746,
          "y": 104
        }
      }
    ]
  },
  "wayfinding": {
    "micello": {
      "account_key": "adasdf",
      "default_level_id": 5,
      "map_id": "c660f81dd250c"
    },
    "snap_to_path": true
  },
  "wayfinding_path": {
    "coordinate": "actual",
    "nodes": [
      {
        "edges": {},
        "name": "N1",
        "position": {
          "x": 746,
          "y": 104
        }
      }
    ]
  },
  "width": 1250,
  "width_m": 1.23
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Map;

$model = new Map({
  "created_time": 1.23,
  "flags": {},
  "for_site": true,
  "height": 1500,
  "height_m": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "latlng_br": {
    "lat": "string_example",
    "lng": "string_example"
  },
  "latlng_tl": {
    "lat": "string_example",
    "lng": "string_example"
  },
  "locked": true,
  "modified_time": 1.23,
  "name": "Mist Office",
  "occupancy_limit": 123,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "orientation": 30,
  "origin_x": 35,
  "origin_y": 60,
  "ppm": 40.94,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "sitesurvey_path": [
    {
      "coordinate": "actual",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "name": "Default",
      "nodes": [
        {
          "edges": {},
          "name": "N1",
          "position": {
            "x": 746,
            "y": 104
          }
        }
      ]
    }
  ],
  "thumbnail_url": "https://url/to/image.png",
  "type": "image",
  "url": "https://url/to/image.png",
  "view": "string_example",
  "wall_path": {
    "coordinate": "actual",
    "nodes": [
      {
        "edges": {},
        "name": "N1",
        "position": {
          "x": 746,
          "y": 104
        }
      }
    ]
  },
  "wayfinding": {
    "micello": {
      "account_key": "adasdf",
      "default_level_id": 5,
      "map_id": "c660f81dd250c"
    },
    "snap_to_path": true
  },
  "wayfinding_path": {
    "coordinate": "actual",
    "nodes": [
      {
        "edges": {},
        "name": "N1",
        "position": {
          "x": 746,
          "y": 104
        }
      }
    ]
  },
  "width": 1250,
  "width_m": 1.23
});
$resp = $client->sites maps->updateSiteMap($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/maps/{map_id}`

**Summary:** deleteSiteMap

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/maps/{map_id}/image`

**Summary:** addSiteMapImage

**Request (raw array example)**

```json
{
  "file": "string_example",
  "json": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ImageImport;

$model = new ImageImport({
  "file": "string_example",
  "json": "string_example"
});
$resp = $client->sites maps->addSiteMapImage($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/maps/{map_id}/image`

**Summary:** deleteSiteMapImage

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/maps/{map_id}/replace`

**Summary:** replaceSiteMapImage

**Request (raw array example)**

```json
{
  "file": "string_example",
  "json": {
    "transform": {
      "rotation": 1.23,
      "scale": 0.98,
      "x": 3.16,
      "y": 12
    }
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MapSiteReplaceFile;

$model = new MapSiteReplaceFile({
  "file": "string_example",
  "json": {
    "transform": {
      "rotation": 1.23,
      "scale": 0.98,
      "x": 3.16,
      "y": 12
    }
  }
});
$resp = $client->sites maps->replaceSiteMapImage($model->toArray());
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

## `POST /api/v1/sites/{site_id}/maps/{map_id}/set_map`

**Summary:** bulkAssignSiteApsToMap

**Request (raw array example)**

```json
{
  "macs": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MacAddresses;

$model = new MacAddresses({
  "macs": [
    "string_example"
  ]
});
$resp = $client->sites maps->bulkAssignSiteApsToMap($model->toArray());
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

## `POST /api/v1/sites/{site_id}/maps/{map_id}/wayfinding/import`

**Summary:** importSiteWayfindings

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

