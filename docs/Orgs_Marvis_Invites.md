# Orgs Marvis Invites API

## `GET /api/v1/orgs/{org_id}/marvisinvites`

**Summary:** listOrgMarvisClientInvites

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/marvisinvites`

**Summary:** createOrgMarvisClientInvite

**Request (raw array example)**

```json
{
  "disabled": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "name": "Handhelds",
  "provision_url": "https://api.mist.com/path/to/url"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MarvisClient;

$model = new MarvisClient({
  "disabled": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "name": "Handhelds",
  "provision_url": "https://api.mist.com/path/to/url"
});
$resp = $client->orgs marvis invites->createOrgMarvisClientInvite($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/marvisinvites/{marvisinvite_id}`

**Summary:** getOrgMarvisClientInvite

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/marvisinvites/{marvisinvite_id}`

**Summary:** updateOrgMarvisClientInvite

**Request (raw array example)**

```json
{
  "disabled": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "name": "Handhelds",
  "provision_url": "https://api.mist.com/path/to/url"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MarvisClient;

$model = new MarvisClient({
  "disabled": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "name": "Handhelds",
  "provision_url": "https://api.mist.com/path/to/url"
});
$resp = $client->orgs marvis invites->updateOrgMarvisClientInvite($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/marvisinvites/{marvisinvite_id}`

**Summary:** deleteOrgMarvisClientInvite

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

