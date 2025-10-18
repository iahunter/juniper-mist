# Sites Stats API

## `GET /api/v1/sites/{site_id}/stats`

**Summary:** getSiteStats

**Responses**

- **200**: OK
```json
{
  "address": "string_example",
  "alarmtemplate_id": "string_example",
  "country_code": "string_example",
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "lat": 1.23,
  "latlng": {
    "lat": 37.295833,
    "lng": -122.032946
  },
  "lng": 1.23,
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "name": "string_example",
  "networktemplate_id": "string_example",
  "num_ap": 123,
  "num_ap_connected": 123,
  "num_clients": 123,
  "num_devices": 123,
  "num_devices_connected": 123,
  "num_gateway": 123,
  "num_gateway_connected": 123,
  "num_switch": 123,
  "num_switch_connected": 123,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rftemplate_id": "string_example",
  "secpolicy_id": "string_example",
  "sitegroup_ids": [
    "string_example"
  ],
  "timezone": "string_example",
  "tzoffset": 123
}
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

