# Orgs User MACs API

## `POST /api/v1/orgs/{org_id}/usermacs`

**Summary:** createOrgUserMac

**Request (raw array example)**

```json
{
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "labels": [
    "string_example"
  ],
  "mac": "5684dae9ac8b",
  "name": "Printer2",
  "notes": "mac address refers to Canon printers",
  "radius_group": "VIP",
  "vlan": "30"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UserMac;

$model = new UserMac({
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "labels": [
    "string_example"
  ],
  "mac": "5684dae9ac8b",
  "name": "Printer2",
  "notes": "mac address refers to Canon printers",
  "radius_group": "VIP",
  "vlan": "30"
});
$resp = $client->orgs user macs->createOrgUserMac($model->toArray());
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

## `PUT /api/v1/orgs/{org_id}/usermacs`

**Summary:** updateOrgMultipleUserMacs

**Request (raw array example)**

```json
[
  {
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "labels": [
      "string_example"
    ],
    "mac": "5684dae9ac8b",
    "name": "Printer2",
    "notes": "mac address refers to Canon printers",
    "radius_group": "VIP",
    "vlan": "30"
  }
]
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UserMacs;

$model = new UserMacs([
  {
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "labels": [
      "string_example"
    ],
    "mac": "5684dae9ac8b",
    "name": "Printer2",
    "notes": "mac address refers to Canon printers",
    "radius_group": "VIP",
    "vlan": "30"
  }
]);
$resp = $client->orgs user macs->updateOrgMultipleUserMacs($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/usermacs/delete`

**Summary:** deleteOrgMultipleUserMacs

**Request (raw array example)**

```json
{
  "usermac_ids": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UsermacsId;

$model = new UsermacsId({
  "usermac_ids": [
    "string_example"
  ]
});
$resp = $client->orgs user macs->deleteOrgMultipleUserMacs($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/usermacs/import`

**Summary:** importOrgUserMacs

**Request (raw array example)**

```json
[
  {
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "labels": [
      "string_example"
    ],
    "mac": "5684dae9ac8b",
    "name": "Printer2",
    "notes": "mac address refers to Canon printers",
    "radius_group": "VIP",
    "vlan": "30"
  }
]
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UserMacs;

$model = new UserMacs([
  {
    "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
    "labels": [
      "string_example"
    ],
    "mac": "5684dae9ac8b",
    "name": "Printer2",
    "notes": "mac address refers to Canon printers",
    "radius_group": "VIP",
    "vlan": "30"
  }
]);
$resp = $client->orgs user macs->importOrgUserMacs($model->toArray());
print_r($resp);
```

**Request (raw array example)**

```json
{
  "file": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\BinaryStream;

$model = new BinaryStream({
  "file": "string_example"
});
$resp = $client->orgs user macs->importOrgUserMacs($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/usermacs/search`

**Summary:** searchOrgUserMacs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|Partial/full MAC address|
|`labels`|query|false|`#/components/schemas/search_org_user_macs_labels`|Optional, array of strings of labels|
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

## `GET /api/v1/orgs/{org_id}/usermacs/{usermac_id}`

**Summary:** getOrgUserMac

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/usermacs/{usermac_id}`

**Summary:** updateOrgUserMac

**Request (raw array example)**

```json
{
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "labels": [
    "string_example"
  ],
  "mac": "5684dae9ac8b",
  "name": "Printer2",
  "notes": "mac address refers to Canon printers",
  "radius_group": "VIP",
  "vlan": "30"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UserMac;

$model = new UserMac({
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "labels": [
    "string_example"
  ],
  "mac": "5684dae9ac8b",
  "name": "Printer2",
  "notes": "mac address refers to Canon printers",
  "radius_group": "VIP",
  "vlan": "30"
});
$resp = $client->orgs user macs->updateOrgUserMac($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/usermacs/{usermac_id}`

**Summary:** deleteOrgUserMac

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

