# Sites UI Settings API

## `GET /api/v1/sites/{site_id}/uisettings`

**Summary:** listSiteUiSettings

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/uisettings`

**Summary:** createSiteUiSettings

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "defaultScopeId": "67970e46-4e12-11e6-9188-0242ad112847",
  "defaultScopeType": "site",
  "defaultTimeRange": {
    "end": 1508828400,
    "endDate": "10/23/2017",
    "interval": "1d",
    "name": "This Week",
    "shortName": "thisWeek",
    "start": 1508655600,
    "usePreset": true
  },
  "description": "Description of the databoard",
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "isCustomDataboard": true,
  "isScopeLinked": true,
  "isTimeRangeLinked": true,
  "modified_time": 1.23,
  "name": "New Databoard",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "purpose": "databoard",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tiles": [
    {
      "chartBand": "2.4 ghz",
      "chartColor": "#00B4AD",
      "chartDirection": "tx + rx",
      "chartRankBy": "string_example",
      "chartType": "timeSeries",
      "colspan": 5,
      "column": 1,
      "hideEmptyRows": true,
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "metric": {
        "apiName": "client_dhcp_latency"
      },
      "name": "New Analysis",
      "row": 1,
      "rowspan": 2,
      "scopeId": "e0c767834b4c",
      "scopeType": "client",
      "sortedColumnIds": [
        "string_example"
      ],
      "timeRange": {
        "end": 1508823743,
        "endDate": "10/23/2017",
        "interval": "1d",
        "name": "Past 7 Days",
        "shortName": "7d",
        "start": 1508223600,
        "usePreset": true
      },
      "trendType": "line",
      "vizType": "averageTimeSeriesChart"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UiSettings;

$model = new UiSettings({
  "created_time": 1.23,
  "defaultScopeId": "67970e46-4e12-11e6-9188-0242ad112847",
  "defaultScopeType": "site",
  "defaultTimeRange": {
    "end": 1508828400,
    "endDate": "10/23/2017",
    "interval": "1d",
    "name": "This Week",
    "shortName": "thisWeek",
    "start": 1508655600,
    "usePreset": true
  },
  "description": "Description of the databoard",
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "isCustomDataboard": true,
  "isScopeLinked": true,
  "isTimeRangeLinked": true,
  "modified_time": 1.23,
  "name": "New Databoard",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "purpose": "databoard",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tiles": [
    {
      "chartBand": "2.4 ghz",
      "chartColor": "#00B4AD",
      "chartDirection": "tx + rx",
      "chartRankBy": "string_example",
      "chartType": "timeSeries",
      "colspan": 5,
      "column": 1,
      "hideEmptyRows": true,
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "metric": {
        "apiName": "client_dhcp_latency"
      },
      "name": "New Analysis",
      "row": 1,
      "rowspan": 2,
      "scopeId": "e0c767834b4c",
      "scopeType": "client",
      "sortedColumnIds": [
        "string_example"
      ],
      "timeRange": {
        "end": 1508823743,
        "endDate": "10/23/2017",
        "interval": "1d",
        "name": "Past 7 Days",
        "shortName": "7d",
        "start": 1508223600,
        "usePreset": true
      },
      "trendType": "line",
      "vizType": "averageTimeSeriesChart"
    }
  ]
});
$resp = $client->sites ui settings->createSiteUiSettings($model->toArray());
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

## `GET /api/v1/sites/{site_id}/uisettings/derived`

**Summary:** listSiteUiSettingDerived

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/uisettings/{uisetting_id}`

**Summary:** getSiteUiSetting

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/uisettings/{uisetting_id}`

**Summary:** updateSiteUiSetting

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "defaultScopeId": "67970e46-4e12-11e6-9188-0242ad112847",
  "defaultScopeType": "site",
  "defaultTimeRange": {
    "end": 1508828400,
    "endDate": "10/23/2017",
    "interval": "1d",
    "name": "This Week",
    "shortName": "thisWeek",
    "start": 1508655600,
    "usePreset": true
  },
  "description": "Description of the databoard",
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "isCustomDataboard": true,
  "isScopeLinked": true,
  "isTimeRangeLinked": true,
  "modified_time": 1.23,
  "name": "New Databoard",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "purpose": "databoard",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tiles": [
    {
      "chartBand": "2.4 ghz",
      "chartColor": "#00B4AD",
      "chartDirection": "tx + rx",
      "chartRankBy": "string_example",
      "chartType": "timeSeries",
      "colspan": 5,
      "column": 1,
      "hideEmptyRows": true,
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "metric": {
        "apiName": "client_dhcp_latency"
      },
      "name": "New Analysis",
      "row": 1,
      "rowspan": 2,
      "scopeId": "e0c767834b4c",
      "scopeType": "client",
      "sortedColumnIds": [
        "string_example"
      ],
      "timeRange": {
        "end": 1508823743,
        "endDate": "10/23/2017",
        "interval": "1d",
        "name": "Past 7 Days",
        "shortName": "7d",
        "start": 1508223600,
        "usePreset": true
      },
      "trendType": "line",
      "vizType": "averageTimeSeriesChart"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UiSettings;

$model = new UiSettings({
  "created_time": 1.23,
  "defaultScopeId": "67970e46-4e12-11e6-9188-0242ad112847",
  "defaultScopeType": "site",
  "defaultTimeRange": {
    "end": 1508828400,
    "endDate": "10/23/2017",
    "interval": "1d",
    "name": "This Week",
    "shortName": "thisWeek",
    "start": 1508655600,
    "usePreset": true
  },
  "description": "Description of the databoard",
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "isCustomDataboard": true,
  "isScopeLinked": true,
  "isTimeRangeLinked": true,
  "modified_time": 1.23,
  "name": "New Databoard",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "purpose": "databoard",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tiles": [
    {
      "chartBand": "2.4 ghz",
      "chartColor": "#00B4AD",
      "chartDirection": "tx + rx",
      "chartRankBy": "string_example",
      "chartType": "timeSeries",
      "colspan": 5,
      "column": 1,
      "hideEmptyRows": true,
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "metric": {
        "apiName": "client_dhcp_latency"
      },
      "name": "New Analysis",
      "row": 1,
      "rowspan": 2,
      "scopeId": "e0c767834b4c",
      "scopeType": "client",
      "sortedColumnIds": [
        "string_example"
      ],
      "timeRange": {
        "end": 1508823743,
        "endDate": "10/23/2017",
        "interval": "1d",
        "name": "Past 7 Days",
        "shortName": "7d",
        "start": 1508223600,
        "usePreset": true
      },
      "trendType": "line",
      "vizType": "averageTimeSeriesChart"
    }
  ]
});
$resp = $client->sites ui settings->updateSiteUiSetting($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/uisettings/{uisetting_id}`

**Summary:** deleteSiteUiSetting

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

