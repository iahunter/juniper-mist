# Orgs Integration SkyATP API

## `PUT /api/v1/orgs/{org_id}/setting/skyatp/secintel_allowlist`

**Summary:** udpateOrgAtpAllowedList

**Request (raw array example)**

```json
{
  "domains": [
    {
      "comment": "restricted",
      "value": "unsafe.com"
    }
  ],
  "ip": [
    {
      "comment": "nas",
      "value": "10.1.3.5"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SkyatpList;

$model = new SkyatpList({
  "domains": [
    {
      "comment": "restricted",
      "value": "unsafe.com"
    }
  ],
  "ip": [
    {
      "comment": "nas",
      "value": "10.1.3.5"
    }
  ]
});
$resp = $client->orgs integration skyatp->udpateOrgAtpAllowedList($model->toArray());
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

## `PUT /api/v1/orgs/{org_id}/setting/skyatp/secintel_blocklist`

**Summary:** udpateOrgAtpBlockedList

**Request (raw array example)**

```json
{
  "domains": [
    {
      "comment": "restricted",
      "value": "unsafe.com"
    }
  ],
  "ip": [
    {
      "comment": "nas",
      "value": "10.1.3.5"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SkyatpList;

$model = new SkyatpList({
  "domains": [
    {
      "comment": "restricted",
      "value": "unsafe.com"
    }
  ],
  "ip": [
    {
      "comment": "nas",
      "value": "10.1.3.5"
    }
  ]
});
$resp = $client->orgs integration skyatp->udpateOrgAtpBlockedList($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/setting/skyatp/setup`

**Summary:** getOrgSkyAtpIntegration

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/skyatp/setup`

**Summary:** setupOrgAtpIntegration

**Request (raw array example)**

```json
{
  "password": "foryoureyesonly",
  "realm": "mist-team",
  "username": "john@abc.com"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AccountSkyatpConfig;

$model = new AccountSkyatpConfig({
  "password": "foryoureyesonly",
  "realm": "mist-team",
  "username": "john@abc.com"
});
$resp = $client->orgs integration skyatp->setupOrgAtpIntegration($model->toArray());
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

## `PUT /api/v1/orgs/{org_id}/setting/skyatp/setup`

**Summary:** udpateOrgAtpIntegration

**Request (raw array example)**

```json
{
  "secintel": {
    "third_party_threat_feeds": [
      "string_example"
    ]
  },
  "secintel_allowlist_url": "https://papi.s3.amazonaws.com/secintel_allowlist/xxx...",
  "secintel_blocklist_url": "https://papi.s3.amazonaws.com/secintel_blocklist/xxx..."
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AccountSkyatpData;

$model = new AccountSkyatpData({
  "secintel": {
    "third_party_threat_feeds": [
      "string_example"
    ]
  },
  "secintel_allowlist_url": "https://papi.s3.amazonaws.com/secintel_allowlist/xxx...",
  "secintel_blocklist_url": "https://papi.s3.amazonaws.com/secintel_blocklist/xxx..."
});
$resp = $client->orgs integration skyatp->udpateOrgAtpIntegration($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/setting/skyatp/setup`

**Summary:** deleteOrgSkyAtpIntegration

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

