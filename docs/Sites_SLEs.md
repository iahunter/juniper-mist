# Sites SLEs API

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/classifier/{classifier}/summary`

**Summary:** getSiteSleClassifierDetails

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/classifiers`

**Summary:** listSiteSleMetricClassifiers

**Responses**

- **200**: OK
```json
[
  "string_example"
]
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/histogram`

**Summary:** getSiteSleHistogram

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impact-summary`

**Summary:** getSiteSleImpactSummary

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`fields`|query|false|`#/components/schemas/site_sle_impact_summary_fields_parameter`||
|`classifier`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-applications`

**Summary:** listSiteSleImpactedApplications

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`classifier`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-aps`

**Summary:** listSiteSleImpactedAps

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`classifier`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-chassis`

**Summary:** listSiteSleImpactedChassis

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`classifier`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-clients`

**Summary:** listSiteSleImpactedWiredClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`classifier`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-gateways`

**Summary:** listSiteSleImpactedGateways

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`classifier`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-interfaces`

**Summary:** listSiteSleImpactedInterfaces

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`classifier`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-switches`

**Summary:** listSiteSleImpactedSwitches

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`classifier`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/impacted-users`

**Summary:** listSiteSleImpactedWirelessClients

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`None`|None|false|``||
|`None`|None|false|``||
|`classifier`|query|false|`string`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/summary`

**Summary:** getSiteSleSummary

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/threshold`

**Summary:** getSiteSleThreshold

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/threshold`

**Summary:** replaceSiteSleThreshold

**Request (raw array example)**

```json
{
  "default": 1.23,
  "direction": "string_example",
  "maximum": 1.23,
  "metric": "string_example",
  "minimum": 1.23,
  "threshold": "string_example",
  "units": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SleThreshold;

$model = new SleThreshold({
  "default": 1.23,
  "direction": "string_example",
  "maximum": 1.23,
  "metric": "string_example",
  "minimum": 1.23,
  "threshold": "string_example",
  "units": "string_example"
});
$resp = $client->sites sles->replaceSiteSleThreshold($model->toArray());
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

## `PUT /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metric/{metric}/threshold`

**Summary:** updateSiteSleThreshold

**Request (raw array example)**

```json
{
  "default": 1.23,
  "direction": "string_example",
  "maximum": 1.23,
  "metric": "string_example",
  "minimum": 1.23,
  "threshold": "string_example",
  "units": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SleThreshold;

$model = new SleThreshold({
  "default": 1.23,
  "direction": "string_example",
  "maximum": 1.23,
  "metric": "string_example",
  "minimum": 1.23,
  "threshold": "string_example",
  "units": "string_example"
});
$resp = $client->sites sles->updateSiteSleThreshold($model->toArray());
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

## `GET /api/v1/sites/{site_id}/sle/{scope}/{scope_id}/metrics`

**Summary:** listSiteSlesMetrics

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

