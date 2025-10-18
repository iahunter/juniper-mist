# Sites Spectrum Analysis API

## `GET /api/v1/sites/{site_id}/analyze_spectrum`

**Summary:** getSiteRunningSpectrumAnalysis

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/analyze_spectrum`

**Summary:** initiateSiteAnalyzeSpectrum

**Request (raw array example)**

```json
{
  "band": "string_example",
  "device_id": "string_example",
  "duration": 123,
  "format": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SpectrumAnalysis;

$model = new SpectrumAnalysis({
  "band": "string_example",
  "device_id": "string_example",
  "duration": 123,
  "format": "string_example"
});
$resp = $client->sites spectrum analysis->initiateSiteAnalyzeSpectrum($model->toArray());
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

## `GET /api/v1/sites/{site_id}/stats/analyze_spectrum`

**Summary:** listSiteSpectrumAnalysis

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

