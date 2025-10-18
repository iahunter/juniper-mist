# Orgs Asset Filters API

## `GET /api/v1/orgs/{org_id}/assetfilters`

**Summary:** listOrgAssetFilters

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

## `POST /api/v1/orgs/{org_id}/assetfilters`

**Summary:** createOrgAssetFilter

**Request (raw array example)**

```json
{
  "ap_mac": "string_example",
  "beam": 123,
  "created_time": 1.23,
  "disabled": true,
  "eddystone_uid_namespace": "2818e3868dec25629ede",
  "eddystone_url": "https://www.abc.com",
  "for_site": true,
  "ibeacon_major": 13,
  "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mfg_company_id": 935,
  "modified_time": 1.23,
  "name": "Visitor Tags",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rssi": 123,
  "service_uuid": "0000fe6a-0000-1000-8000-0030459b3cfb",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AssetFilter;

$model = new AssetFilter({
  "ap_mac": "string_example",
  "beam": 123,
  "created_time": 1.23,
  "disabled": true,
  "eddystone_uid_namespace": "2818e3868dec25629ede",
  "eddystone_url": "https://www.abc.com",
  "for_site": true,
  "ibeacon_major": 13,
  "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mfg_company_id": 935,
  "modified_time": 1.23,
  "name": "Visitor Tags",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rssi": 123,
  "service_uuid": "0000fe6a-0000-1000-8000-0030459b3cfb",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->orgs asset filters->createOrgAssetFilter($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/assetfilters/{assetfilter_id}`

**Summary:** getOrgAssetFilter

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/assetfilters/{assetfilter_id}`

**Summary:** updateOrgAssetFilter

**Request (raw array example)**

```json
{
  "ap_mac": "string_example",
  "beam": 123,
  "created_time": 1.23,
  "disabled": true,
  "eddystone_uid_namespace": "2818e3868dec25629ede",
  "eddystone_url": "https://www.abc.com",
  "for_site": true,
  "ibeacon_major": 13,
  "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mfg_company_id": 935,
  "modified_time": 1.23,
  "name": "Visitor Tags",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rssi": 123,
  "service_uuid": "0000fe6a-0000-1000-8000-0030459b3cfb",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AssetFilter;

$model = new AssetFilter({
  "ap_mac": "string_example",
  "beam": 123,
  "created_time": 1.23,
  "disabled": true,
  "eddystone_uid_namespace": "2818e3868dec25629ede",
  "eddystone_url": "https://www.abc.com",
  "for_site": true,
  "ibeacon_major": 13,
  "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mfg_company_id": 935,
  "modified_time": 1.23,
  "name": "Visitor Tags",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "rssi": 123,
  "service_uuid": "0000fe6a-0000-1000-8000-0030459b3cfb",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
});
$resp = $client->orgs asset filters->updateOrgAssetFilter($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/assetfilters/{assetfilter_id}`

**Summary:** deleteOrgAssetFilter

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

