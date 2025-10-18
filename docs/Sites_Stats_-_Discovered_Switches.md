# Sites Stats - Discovered Switches API

## `GET /api/v1/sites/{site_id}/stats/discovered_switch_metrics/search`

**Summary:** searchSiteDiscoveredSwitchesMetrics

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`scope`|query|false|`#/components/schemas/discovered_switches_metric_scope`|Metric scope|
|`type`|query|false|`#/components/schemas/discovered_switch_metric_type`|Metric type|
|`None`|None|false|``||
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

## `GET /api/v1/sites/{site_id}/stats/discovered_switches/count`

**Summary:** countSiteDiscoveredSwitches

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_discovered_switches_count_distinct`||
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

## `GET /api/v1/sites/{site_id}/stats/discovered_switches/metrics`

**Summary:** listSiteDiscoveredSwitchesMetrics

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`threshold`|query|false|`string`|Configurable # ap per switch threshold, default 12|
|`system_name`|query|false|`string`|System name for switch level metrics, optional|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/stats/discovered_switches/search`

**Summary:** searchSiteDiscoveredSwitches

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`adopted`|query|false|`boolean`||
|`system_name`|query|false|`string`||
|`hostname`|query|false|`string`||
|`vendor`|query|false|`string`||
|`model`|query|false|`string`||
|`version`|query|false|`string`||
|`None`|None|false|``||
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

