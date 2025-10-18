# Orgs RF Templates API

## `GET /api/v1/orgs/{org_id}/rftemplates`

**Summary:** listOrgRfTemplates

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

## `POST /api/v1/orgs/{org_id}/rftemplates`

**Summary:** createOrgRfTemplate

**Request (raw array example)**

```json
{
  "ant_gain_24": 123,
  "ant_gain_5": 123,
  "ant_gain_6": 123,
  "band_24": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 20,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 3,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_24_usage": "string_example",
  "band_5": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 40,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 6,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_5_on_24_radio": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 40,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 6,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_6": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 80,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 7,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example",
    "standard_power": true
  },
  "country_code": "string_example",
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "model_specific": {},
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "scanning_enabled": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\RfTemplate;

$model = new RfTemplate({
  "ant_gain_24": 123,
  "ant_gain_5": 123,
  "ant_gain_6": 123,
  "band_24": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 20,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 3,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_24_usage": "string_example",
  "band_5": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 40,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 6,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_5_on_24_radio": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 40,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 6,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_6": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 80,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 7,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example",
    "standard_power": true
  },
  "country_code": "string_example",
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "model_specific": {},
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "scanning_enabled": true
});
$resp = $client->orgs rf templates->createOrgRfTemplate($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/rftemplates/{rftemplate_id}`

**Summary:** getOrgRfTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/rftemplates/{rftemplate_id}`

**Summary:** updateOrgRfTemplate

**Request (raw array example)**

```json
{
  "ant_gain_24": 123,
  "ant_gain_5": 123,
  "ant_gain_6": 123,
  "band_24": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 20,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 3,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_24_usage": "string_example",
  "band_5": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 40,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 6,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_5_on_24_radio": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 40,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 6,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_6": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 80,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 7,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example",
    "standard_power": true
  },
  "country_code": "string_example",
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "model_specific": {},
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "scanning_enabled": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\RfTemplate;

$model = new RfTemplate({
  "ant_gain_24": 123,
  "ant_gain_5": 123,
  "ant_gain_6": 123,
  "band_24": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 20,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 3,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_24_usage": "string_example",
  "band_5": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 40,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 6,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_5_on_24_radio": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 40,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 6,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example"
  },
  "band_6": {
    "allow_rrm_disable": true,
    "ant_gain": 123,
    "antenna_mode": "default",
    "bandwidth": 80,
    "channels": [
      123
    ],
    "disabled": true,
    "power": 7,
    "power_max": 123,
    "power_min": 123,
    "preamble": "string_example",
    "standard_power": true
  },
  "country_code": "string_example",
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "model_specific": {},
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "scanning_enabled": true
});
$resp = $client->orgs rf templates->updateOrgRfTemplate($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/rftemplates/{rftemplate_id}`

**Summary:** deleteOrgRfTemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

