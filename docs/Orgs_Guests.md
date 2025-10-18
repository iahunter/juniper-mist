# Orgs Guests API

## `GET /api/v1/orgs/{org_id}/guests`

**Summary:** listOrgGuestAuthorizations

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/guests/count`

**Summary:** countOrgGuestAuthorizations

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_guests_count_distinct`||
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

## `GET /api/v1/orgs/{org_id}/guests/search`

**Summary:** searchOrgGuestAuthorization

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`wlan_id`|query|false|`string`|WLAN ID|
|`auth_method`|query|false|`string`|Authentication Method|
|`ssid`|query|false|`string`|SSID|
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

## `GET /api/v1/orgs/{org_id}/guests/{guest_mac}`

**Summary:** getOrgGuestAuthorization

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/guests/{guest_mac}`

**Summary:** updateOrgGuestAuthorization

**Request (raw array example)**

```json
{
  "access_code_email": "string_example",
  "allow_wlan_id_roam": true,
  "ap_mac": "string_example",
  "auth_method": "string_example",
  "authorized": true,
  "authorized_expiring_time": 1480704955,
  "authorized_time": 1480704355,
  "company": "abc",
  "cross_site": true,
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
use Iahunter\JuniperMist\Models\GuestOrg;

$model = new GuestOrg({
  "access_code_email": "string_example",
  "allow_wlan_id_roam": true,
  "ap_mac": "string_example",
  "auth_method": "string_example",
  "authorized": true,
  "authorized_expiring_time": 1480704955,
  "authorized_time": 1480704355,
  "company": "abc",
  "cross_site": true,
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
$resp = $client->orgs guests->updateOrgGuestAuthorization($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/guests/{guest_mac}`

**Summary:** deleteOrgGuestAuthorization

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

