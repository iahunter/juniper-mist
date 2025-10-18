# Installer API

## `GET /api/v1/installer/orgs/{org_id}/alarmtemplates`

**Summary:** listInstallerAlarmTemplates

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/installer/orgs/{org_id}/deviceprofiles`

**Summary:** listInstallerDeviceProfiles

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_default_ap`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/installer/orgs/{org_id}/devices`

**Summary:** listInstallerListOfRecentlyClaimedDevices

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`model`|query|false|`string`|Device Model|
|`site_name`|query|false|`string`|Site Name|
|`site_id`|query|false|`string`|Site ID|
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

## `POST /api/v1/installer/orgs/{org_id}/devices`

**Summary:** claimInstallerDevices

**Request (raw array example)**

```json
[
  "string_example"
]
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ClaimCodes;

$model = new ClaimCodes([
  "string_example"
]);
$resp = $client->installer->claimInstallerDevices($model->toArray());
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

## `PUT /api/v1/installer/orgs/{org_id}/devices/{device_mac}`

**Summary:** provisionInstallerDevices

**Request (raw array example)**

```json
{
  "deviceprofile_name": "SJ1",
  "for_site": true,
  "height": 2.7,
  "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
  "name": "SJ1-AP1",
  "orientation": 90,
  "replacing_mac": "5c5b3500003",
  "role": "string_example",
  "site_id": "72771e6a-6f5e-4de4-a5b9-1266c4197811",
  "site_name": "SJ1",
  "x": 150,
  "y": 300
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\InstallerProvisionDevice;

$model = new InstallerProvisionDevice({
  "deviceprofile_name": "SJ1",
  "for_site": true,
  "height": 2.7,
  "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
  "name": "SJ1-AP1",
  "orientation": 90,
  "replacing_mac": "5c5b3500003",
  "role": "string_example",
  "site_id": "72771e6a-6f5e-4de4-a5b9-1266c4197811",
  "site_name": "SJ1",
  "x": 150,
  "y": 300
});
$resp = $client->installer->provisionInstallerDevices($model->toArray());
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

## `DELETE /api/v1/installer/orgs/{org_id}/devices/{device_mac}`

**Summary:** unassignInstallerRecentlyClaimedDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/installer/orgs/{org_id}/devices/{device_mac}/locate`

**Summary:** startInstallerLocateDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/installer/orgs/{org_id}/devices/{device_mac}/unlocate`

**Summary:** stopInstallerLocateDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/installer/orgs/{org_id}/devices/{device_mac}/{image_name}`

**Summary:** addInstallerDeviceImage

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
$resp = $client->installer->addInstallerDeviceImage($model->toArray());
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

## `DELETE /api/v1/installer/orgs/{org_id}/devices/{device_mac}/{image_name}`

**Summary:** deleteInstallerDeviceImage

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/installer/orgs/{org_id}/devices/{fpc0_mac}/vc`

**Summary:** getInstallerDeviceVirtualChassis

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/installer/orgs/{org_id}/devices/{fpc0_mac}/vc`

**Summary:** createInstallerVirtualChassis

**Request (raw array example)**

```json
{
  "locating": true,
  "members": [
    {
      "locating": true,
      "mac": "string_example",
      "member_id": 123,
      "vc_ports": [
        "string_example"
      ],
      "vc_role": "string_example"
    }
  ],
  "preprovisioned": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\VirtualChassisConfig;

$model = new VirtualChassisConfig({
  "locating": true,
  "members": [
    {
      "locating": true,
      "mac": "string_example",
      "member_id": 123,
      "vc_ports": [
        "string_example"
      ],
      "vc_role": "string_example"
    }
  ],
  "preprovisioned": true
});
$resp = $client->installer->createInstallerVirtualChassis($model->toArray());
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

## `PUT /api/v1/installer/orgs/{org_id}/devices/{fpc0_mac}/vc`

**Summary:** updateInstallerVirtualChassisMember

**Request (raw array example)**

```json
{
  "member": 123,
  "members": [
    {
      "mac": "string_example",
      "member": 123,
      "member_id": 123,
      "vc_ports": [
        "string_example"
      ],
      "vc_role": "string_example"
    }
  ],
  "new-member": 123,
  "op": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\VirtualChassisUpdate;

$model = new VirtualChassisUpdate({
  "member": 123,
  "members": [
    {
      "mac": "string_example",
      "member": 123,
      "member_id": 123,
      "vc_ports": [
        "string_example"
      ],
      "vc_role": "string_example"
    }
  ],
  "new-member": 123,
  "op": "string_example"
});
$resp = $client->installer->updateInstallerVirtualChassisMember($model->toArray());
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

## `GET /api/v1/installer/orgs/{org_id}/rftemplates`

**Summary:** listInstallerRfTemplatesNames

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/installer/orgs/{org_id}/sitegroups`

**Summary:** listInstallerSiteGroups

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/installer/orgs/{org_id}/sites`

**Summary:** listInstallerSites

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/installer/orgs/{org_id}/sites/{site_name}`

**Summary:** createOrUpdateInstallerSites

**Request (raw array example)**

```json
{
  "address": "1601 S. Deanza Blvd., Cupertino, CA, 95014",
  "country_code": "US",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "latlng": {
    "lat": 37.295833,
    "lng": -122.032946
  },
  "name": "Mist Office",
  "rftemplate_name": "rftemplate1",
  "sitegroup_names": [
    "string_example"
  ],
  "timezone": "America/Los_Angeles"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\InstallerSite;

$model = new InstallerSite({
  "address": "1601 S. Deanza Blvd., Cupertino, CA, 95014",
  "country_code": "US",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "latlng": {
    "lat": 37.295833,
    "lng": -122.032946
  },
  "name": "Mist Office",
  "rftemplate_name": "rftemplate1",
  "sitegroup_names": [
    "string_example"
  ],
  "timezone": "America/Los_Angeles"
});
$resp = $client->installer->createOrUpdateInstallerSites($model->toArray());
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

## `GET /api/v1/installer/orgs/{org_id}/sites/{site_name}/maps`

**Summary:** listInstallerMaps

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/import`

**Summary:** importInstallerMap

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
$resp = $client->installer->importInstallerMap($model->toArray());
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

## `POST /api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/{map_id}`

**Summary:** createInstallerMap

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
$resp = $client->installer->createInstallerMap($model->toArray());
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

## `PUT /api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/{map_id}`

**Summary:** updateInstallerMap

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
$resp = $client->installer->updateInstallerMap($model->toArray());
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

## `DELETE /api/v1/installer/orgs/{org_id}/sites/{site_name}/maps/{map_id}`

**Summary:** deleteInstallerMap

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/installer/sites/{site_name}/optimize`

**Summary:** optimizeInstallerRrm

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

