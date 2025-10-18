# Sites Maps - Auto-placement API

## `GET /api/v1/sites/{site_id}/maps/{map_id}/auto_orient`

**Summary:** getSiteApAutoOrientation

**Responses**

- **200**: 
- **400**: Autoplacement was not triggered
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/maps/{map_id}/auto_orient`

**Summary:** startSiteApAutoOrientation

**Request (raw array example)**

```json
{
  "dryrun": true,
  "force_collection": true,
  "macs": [
    "string_example"
  ],
  "override": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AutoOrient;

$model = new AutoOrient({
  "dryrun": true,
  "force_collection": true,
  "macs": [
    "string_example"
  ],
  "override": true
});
$resp = $client->sites maps - auto-placement->startSiteApAutoOrientation($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/maps/{map_id}/auto_orient`

**Summary:** deleteSiteApAutoOrientation

**Responses**

- **200**: Auto orient process has stopped for this map
- **400**: Autoplacement was not triggered
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/maps/{map_id}/auto_placement`

**Summary:** getSiteApAutoplacement

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/maps/{map_id}/auto_placement`

**Summary:** runSiteApAutoplacement

**Request (raw array example)**

```json
{
  "dryrun": true,
  "force_collection": true,
  "macs": [
    "string_example"
  ],
  "override": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AutoPlacement;

$model = new AutoPlacement({
  "dryrun": true,
  "force_collection": true,
  "macs": [
    "string_example"
  ],
  "override": true
});
$resp = $client->sites maps - auto-placement->runSiteApAutoplacement($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/maps/{map_id}/auto_placement`

**Summary:** deleteSiteApAutoplacement

**Responses**

- **200**: Autoplacement Process has stopped for this map
- **400**: Autoplacement was not triggered
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/maps/{map_id}/clear_auto_orient`

**Summary:** clearSiteApAutoOrient

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
$resp = $client->sites maps - auto-placement->clearSiteApAutoOrient($model->toArray());
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

## `POST /api/v1/sites/{site_id}/maps/{map_id}/clear_autoplacement`

**Summary:** clearSiteApAutoplacement

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
$resp = $client->sites maps - auto-placement->clearSiteApAutoplacement($model->toArray());
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

## `POST /api/v1/sites/{site_id}/maps/{map_id}/use_auto_ap_values`

**Summary:** confirmSiteApLocalizationData

**Request (raw array example)**

```json
{
  "accept": true,
  "for": "string_example",
  "macs": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UseAutoApValues;

$model = new UseAutoApValues({
  "accept": true,
  "for": "string_example",
  "macs": [
    "string_example"
  ]
});
$resp = $client->sites maps - auto-placement->confirmSiteApLocalizationData($model->toArray());
print_r($resp);
```

**Responses**

- **200**: Success
- **400**: Map does not exist or belong to specified site / Invalid localization service. Expected [placement, orientation]
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

