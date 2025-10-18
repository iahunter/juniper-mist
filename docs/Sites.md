# Sites API

## `GET /api/v1/sites/{site_id}`

**Summary:** getSiteInfo

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}`

**Summary:** updateSiteInfo

**Request (raw array example)**

```json
{
  "address": "1601 S. Deanza Blvd., Cupertino, CA, 95014",
  "alarmtemplate_id": "684dfc5c-fe77-2290-eb1d-ef3d677fe168",
  "aptemplate_id": "16bdf952-ade2-4491-80b0-85ce506c760b",
  "country_code": "US",
  "created_time": 1.23,
  "gatewaytemplate_id": "6f9b2e75-9b2f-b5ae-81e3-e14c76f1a90f",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "latlng": {
    "lat": 37.295833,
    "lng": -122.032946
  },
  "modified_time": 1.23,
  "name": "Mist Office",
  "networktemplate_id": "12ae9bd2-e0ab-107b-72e8-a7a005565ec2",
  "notes": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rftemplate_id": "bb8a9017-1e36-5d6c-6f2b-551abe8a76a2",
  "secpolicy_id": "3bcd0beb-5d0a-4cbd-92c1-14aea91e98ef",
  "sitegroup_ids": [
    "string_example"
  ],
  "sitetemplate_id": "string_example",
  "timezone": "America/Los_Angeles",
  "tzoffset": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Site;

$model = new Site({
  "address": "1601 S. Deanza Blvd., Cupertino, CA, 95014",
  "alarmtemplate_id": "684dfc5c-fe77-2290-eb1d-ef3d677fe168",
  "aptemplate_id": "16bdf952-ade2-4491-80b0-85ce506c760b",
  "country_code": "US",
  "created_time": 1.23,
  "gatewaytemplate_id": "6f9b2e75-9b2f-b5ae-81e3-e14c76f1a90f",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "latlng": {
    "lat": 37.295833,
    "lng": -122.032946
  },
  "modified_time": 1.23,
  "name": "Mist Office",
  "networktemplate_id": "12ae9bd2-e0ab-107b-72e8-a7a005565ec2",
  "notes": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rftemplate_id": "bb8a9017-1e36-5d6c-6f2b-551abe8a76a2",
  "secpolicy_id": "3bcd0beb-5d0a-4cbd-92c1-14aea91e98ef",
  "sitegroup_ids": [
    "string_example"
  ],
  "sitetemplate_id": "string_example",
  "timezone": "America/Los_Angeles",
  "tzoffset": 123
});
$resp = $client->sites->updateSiteInfo($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}`

**Summary:** deleteSite

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

