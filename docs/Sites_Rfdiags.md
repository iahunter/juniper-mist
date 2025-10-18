# Sites Rfdiags API

## `GET /api/v1/sites/{site_id}/rfdiags`

**Summary:** getSiteSiteRfdiagRecording

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

## `POST /api/v1/sites/{site_id}/rfdiags`

**Summary:** startSiteRecording

**Request (raw array example)**

```json
{
  "duration": 123,
  "mac": "string_example",
  "name": "string_example",
  "sdkclient_id": "string_example",
  "type": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\RfDiag;

$model = new RfDiag({
  "duration": 123,
  "mac": "string_example",
  "name": "string_example",
  "sdkclient_id": "string_example",
  "type": "string_example"
});
$resp = $client->sites rfdiags->startSiteRecording($model->toArray());
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

## `GET /api/v1/sites/{site_id}/rfdiags/{rfdiag_id}`

**Summary:** getSiteRfdiagRecording

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/rfdiags/{rfdiag_id}`

**Summary:** updateSiteRfdiagRecording

**Request (raw array example)**

```json
{
  "duration": 123,
  "mac": "string_example",
  "name": "string_example",
  "sdkclient_id": "string_example",
  "type": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\RfDiag;

$model = new RfDiag({
  "duration": 123,
  "mac": "string_example",
  "name": "string_example",
  "sdkclient_id": "string_example",
  "type": "string_example"
});
$resp = $client->sites rfdiags->updateSiteRfdiagRecording($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/rfdiags/{rfdiag_id}`

**Summary:** deleteSiteRfdiagRecording

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/rfdiags/{rfdiag_id}/download`

**Summary:** downloadSiteRfdiagRecording

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/rfdiags/{rfdiag_id}/stop`

**Summary:** stopSiteRfdiagRecording

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

