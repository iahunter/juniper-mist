# Sites Devices - Wired - Virtual Chassis API

## `GET /api/v1/sites/{site_id}/devices/{device_id}/vc`

**Summary:** getSiteDeviceVirtualChassis

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/vc`

**Summary:** createSiteVirtualChassis

**Request (raw array example)**

```json
{
  "locating": true,
  "members": [
    {
      "locating": true,
      "mac": "string_example",
      "member_id": 123,
      "vc_ports": [
        "string_example"
      ],
      "vc_role": "string_example"
    }
  ],
  "preprovisioned": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\VirtualChassisConfig;

$model = new VirtualChassisConfig({
  "locating": true,
  "members": [
    {
      "locating": true,
      "mac": "string_example",
      "member_id": 123,
      "vc_ports": [
        "string_example"
      ],
      "vc_role": "string_example"
    }
  ],
  "preprovisioned": true
});
$resp = $client->sites devices - wired - virtual chassis->createSiteVirtualChassis($model->toArray());
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

## `PUT /api/v1/sites/{site_id}/devices/{device_id}/vc`

**Summary:** updateSiteVirtualChassisMember

**Request (raw array example)**

```json
{
  "member": 123,
  "members": [
    {
      "mac": "string_example",
      "member": 123,
      "member_id": 123,
      "vc_ports": [
        "string_example"
      ],
      "vc_role": "string_example"
    }
  ],
  "new-member": 123,
  "op": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\VirtualChassisUpdate;

$model = new VirtualChassisUpdate({
  "member": 123,
  "members": [
    {
      "mac": "string_example",
      "member": 123,
      "member_id": 123,
      "vc_ports": [
        "string_example"
      ],
      "vc_role": "string_example"
    }
  ],
  "new-member": 123,
  "op": "string_example"
});
$resp = $client->sites devices - wired - virtual chassis->updateSiteVirtualChassisMember($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/devices/{device_id}/vc`

**Summary:** deleteSiteVirtualChassis

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/vc/convert_to_virtualmac`

**Summary:** convertSiteVirtualChassisToVirtualMac

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/vc/vc_port`

**Summary:** setSiteVcPort

**Request (raw array example)**

```json
{
  "members": [
    {
      "member": 1.23,
      "vc_ports": [
        "string_example"
      ]
    }
  ],
  "op": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\VirtualChassisPort;

$model = new VirtualChassisPort({
  "members": [
    {
      "member": 1.23,
      "vc_ports": [
        "string_example"
      ]
    }
  ],
  "op": "string_example"
});
$resp = $client->sites devices - wired - virtual chassis->setSiteVcPort($model->toArray());
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

