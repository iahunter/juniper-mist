# Sites Location API

## `GET /api/v1/sites/{site_id}/location/coverage`

**Summary:** getSiteBeamCoverageOverview

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`map_id`|query|false|`string`|Map_id (filter by map_id)|
|`type`|query|false|`#/components/schemas/rf_client_type`||
|`client_type`|query|false|`string`|Client_type (as filter. optional)|
|`None`|None|false|``||
|`None`|None|false|``||
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

## `GET /api/v1/sites/{site_id}/location/ml/current`

**Summary:** getSiteMachineLearningCurrentStat

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`map_id`|query|false|`string`|Map_id (as filter, optional)|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/location/ml/defaults`

**Summary:** getSiteDefaultPlfForModels

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/location/ml/device/{device_id}`

**Summary:** overwriteSiteMlForDevice

**Request (raw array example)**

```json
{}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MlOverwrite;

$model = new MlOverwrite({});
$resp = $client->sites location->overwriteSiteMlForDevice($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/location/ml/device/{device_id}`

**Summary:** clearSiteMlOverwriteForDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/location/ml/map/{map_id}`

**Summary:** overwriteSiteMlForMap

**Request (raw array example)**

```json
{}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MlOverwrite;

$model = new MlOverwrite({});
$resp = $client->sites location->overwriteSiteMlForMap($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/location/ml/map/{map_id}`

**Summary:** clearSiteMlOverwriteForMap

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/location/ml/reset/map/{map_id}`

**Summary:** resetSiteMlStatsByMap

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

