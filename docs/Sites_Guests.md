# Sites Guests API

## `GET /api/v1/sites/{site_id}/guests`

**Summary:** listSiteAllGuestAuthorizations

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`wlan_id`|query|false|`string`|UUID of single or multiple (Comma separated) WLAN under Site `site_id` (to filter by WLAN)|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/guests/count`

**Summary:** countSiteGuestAuthorizations

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/site_guests_count_distinct`||
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

## `GET /api/v1/sites/{site_id}/guests/derived`

**Summary:** listSiteAllGuestAuthorizationsDerived

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`wlan_id`|query|false|`string`|UUID of single or multiple (Comma separated) WLAN under Site `site_id` (to filter by WLAN)|
|`cross_site`|query|false|`boolean`|Whether to get org level guests, default is false i.e get site level guests|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/guests/search`

**Summary:** searchSiteGuestAuthorization

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`wlan_id`|query|false|`string`||
|`auth_method`|query|false|`string`||
|`ssid`|query|false|`string`||
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

## `GET /api/v1/sites/{site_id}/guests/{guest_mac}`

**Summary:** getSiteGuestAuthorization

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/guests/{guest_mac}`

**Summary:** updateSiteGuestAuthorization

**Request (raw array example)**

```json
{
  "access_code_email": "string_example",
  "ap_mac": "string_example",
  "auth_method": "string_example",
  "authorized": true,
  "authorized_expiring_time": 1480704955,
  "authorized_time": 1480704355,
  "company": "abc",
  "email": "john@abc.com",
  "field1": "string_example",
  "field2": "string_example",
  "field3": "string_example",
  "field4": "string_example",
  "mac": "string_example",
  "minutes": 123,
  "name": "John Smith",
  "random_mac": true,
  "ssid": "Guest-SSID",
  "wlan_id": "6748cfa6-4e12-11e6-9188-0242ac110007"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Guest;

$model = new Guest({
  "access_code_email": "string_example",
  "ap_mac": "string_example",
  "auth_method": "string_example",
  "authorized": true,
  "authorized_expiring_time": 1480704955,
  "authorized_time": 1480704355,
  "company": "abc",
  "email": "john@abc.com",
  "field1": "string_example",
  "field2": "string_example",
  "field3": "string_example",
  "field4": "string_example",
  "mac": "string_example",
  "minutes": 123,
  "name": "John Smith",
  "random_mac": true,
  "ssid": "Guest-SSID",
  "wlan_id": "6748cfa6-4e12-11e6-9188-0242ac110007"
});
$resp = $client->sites guests->updateSiteGuestAuthorization($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/guests/{guest_mac}`

**Summary:** deleteSiteGuestAuthorization

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

