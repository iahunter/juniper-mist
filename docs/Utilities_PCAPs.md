# Utilities PCAPs API

## `GET /api/v1/orgs/{org_id}/pcaps`

**Summary:** listOrgPacketCaptures

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `GET /api/v1/orgs/{org_id}/pcaps/capture`

**Summary:** getOrgCapturingStatus

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/pcaps/capture`

**Summary:** startOrgPacketCapture

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `DELETE /api/v1/orgs/{org_id}/pcaps/capture`

**Summary:** stopOrgPacketCapture

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/pcaps`

**Summary:** listSitePacketCaptures

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`client_mac`|query|false|`string`|Optional client mac filter|
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

## `GET /api/v1/sites/{site_id}/pcaps/capture`

**Summary:** getSiteCapturingStatus

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/pcaps/capture`

**Summary:** startSitePacketCapture

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `DELETE /api/v1/sites/{site_id}/pcaps/capture`

**Summary:** stopSitePacketCapture

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/pcaps/{pcap_id}`

**Summary:** updateSitePacketCapture

**Request (raw array example)**

```json
{
  "notes": "wired pcap test"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NotesString;

$model = new NotesString({
  "notes": "wired pcap test"
});
$resp = $client->utilities pcaps->updateSitePacketCapture($model->toArray());
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

