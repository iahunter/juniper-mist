# Utilities Upgrade API

## `GET /api/v1/orgs/{org_id}/devices/upgrade`

**Summary:** listOrgDeviceUpgrades

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/devices/upgrade`

**Summary:** upgradeOrgDevices

**Request (raw array example)**

```json
{
  "all_sites": true,
  "canary_phases": [
    123
  ],
  "device_type": "string_example",
  "download_strategy": "string_example",
  "max_failure_percentage": 123,
  "max_failures": [
    123
  ],
  "models": [
    [
      "string_example"
    ]
  ],
  "p2p_cluster_size": 0,
  "p2p_parallelism": 123,
  "reboot_at": 1624399840,
  "reboot_datetime": "2024-06-13 15:00:00-07:00",
  "reboot_strategy": "string_example",
  "rrm_first_batch_percentage": 2,
  "rrm_max_batch_percentage": 10,
  "rrm_mesh_upgrade": "string_example",
  "rrm_node_order": "string_example",
  "rrm_slow_ramp": true,
  "rules": [
    {}
  ],
  "site_ids": [
    "string_example"
  ],
  "snapshot": true,
  "start_datetime": "2024-06-13 15:00:00-07:00",
  "start_time": 1624399840,
  "strategy": "string_example",
  "versions": [
    {
      "firmware_type": "string_example",
      "force": true,
      "model_version": {},
      "version": "string_example"
    }
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UpgradeOrgDevices;

$model = new UpgradeOrgDevices({
  "all_sites": true,
  "canary_phases": [
    123
  ],
  "device_type": "string_example",
  "download_strategy": "string_example",
  "max_failure_percentage": 123,
  "max_failures": [
    123
  ],
  "models": [
    [
      "string_example"
    ]
  ],
  "p2p_cluster_size": 0,
  "p2p_parallelism": 123,
  "reboot_at": 1624399840,
  "reboot_datetime": "2024-06-13 15:00:00-07:00",
  "reboot_strategy": "string_example",
  "rrm_first_batch_percentage": 2,
  "rrm_max_batch_percentage": 10,
  "rrm_mesh_upgrade": "string_example",
  "rrm_node_order": "string_example",
  "rrm_slow_ramp": true,
  "rules": [
    {}
  ],
  "site_ids": [
    "string_example"
  ],
  "snapshot": true,
  "start_datetime": "2024-06-13 15:00:00-07:00",
  "start_time": 1624399840,
  "strategy": "string_example",
  "versions": [
    {
      "firmware_type": "string_example",
      "force": true,
      "model_version": {},
      "version": "string_example"
    }
  ]
});
$resp = $client->utilities upgrade->upgradeOrgDevices($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/devices/upgrade/{upgrade_id}`

**Summary:** getOrgDeviceUpgrade

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/devices/upgrade/{upgrade_id}/cancel`

**Summary:** cancelOrgDeviceUpgrade

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/devices/versions`

**Summary:** listOrgAvailableDeviceVersions

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_default_ap`||
|`model`|query|false|`string`|Fetch version for device model, use/combine with `type` as needed (for switch and gateway devices)|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/jsi/devices/{device_mac}/upgrade`

**Summary:** upgradeOrgJsiDevice

**Request (raw array example)**

```json
{
  "version": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\VersionString;

$model = new VersionString({
  "version": "string_example"
});
$resp = $client->utilities upgrade->upgradeOrgJsiDevice($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/mxedges/upgrade`

**Summary:** listOrgMxEdgeUpgrades

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/mxedges/upgrade`

**Summary:** upgradeOrgMxEdges

**Request (raw array example)**

```json
{
  "allow_downgrades": {
    "mxagent": true,
    "mxdas": true,
    "mxocproxy": true,
    "radsecproxy": true,
    "tunterm": true
  },
  "canary_phases": [
    123
  ],
  "channel": "string_example",
  "distro": "string_example",
  "max_failure_percentage": 123,
  "mxedge_ids": [
    "string_example"
  ],
  "start_time": 123,
  "strategy": "string_example",
  "versions": {
    "mxagent": "string_example",
    "mxdas": "string_example",
    "mxocproxy": "string_example",
    "radsecproxy": "string_example",
    "tunterm": "string_example"
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MxedgeUpgradeMulti;

$model = new MxedgeUpgradeMulti({
  "allow_downgrades": {
    "mxagent": true,
    "mxdas": true,
    "mxocproxy": true,
    "radsecproxy": true,
    "tunterm": true
  },
  "canary_phases": [
    123
  ],
  "channel": "string_example",
  "distro": "string_example",
  "max_failure_percentage": 123,
  "mxedge_ids": [
    "string_example"
  ],
  "start_time": 123,
  "strategy": "string_example",
  "versions": {
    "mxagent": "string_example",
    "mxdas": "string_example",
    "mxocproxy": "string_example",
    "radsecproxy": "string_example",
    "tunterm": "string_example"
  }
});
$resp = $client->utilities upgrade->upgradeOrgMxEdges($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/mxedges/upgrade/{upgrade_id}`

**Summary:** getOrgMxEdgeUpgrade

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/ssr/upgrade`

**Summary:** listOrgSsrUpgrades

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/ssr/upgrade`

**Summary:** upgradeOrgSsrs

**Request (raw array example)**

```json
{
  "channel": "string_example",
  "device_ids": [
    "string_example"
  ],
  "reboot_at": 123,
  "start_time": 123,
  "strategy": "string_example",
  "version": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SsrUpgradeMulti;

$model = new SsrUpgradeMulti({
  "channel": "string_example",
  "device_ids": [
    "string_example"
  ],
  "reboot_at": 123,
  "start_time": 123,
  "strategy": "string_example",
  "version": "string_example"
});
$resp = $client->utilities upgrade->upgradeOrgSsrs($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/ssr/upgrade/{upgrade_id}/cancel`

**Summary:** getOrgSsrUpgrade

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/ssr/upgrade/{upgrade_id}/cancel`

**Summary:** cancelOrgSsrUpgrade

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/ssr/versions`

**Summary:** listOrgAvailableSsrVersions

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`None`|None|false|``||
|`mac`|query|false|`string`|Optional. MAC address, or comma separated MAC address list.|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/devices/upgrade`

**Summary:** listSiteDeviceUpgrades

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`status`|query|false|`#/components/schemas/upgrade_device_status`||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/upgrade`

**Summary:** upgradeSiteDevices

**Request (raw array example)**

```json
{
  "canary_phases": [
    123
  ],
  "device_ids": [
    "string_example"
  ],
  "enable_p2p": true,
  "force": true,
  "max_failure_percentage": 123,
  "max_failures": [
    123
  ],
  "models": [
    "string_example"
  ],
  "p2p_cluster_size": 0,
  "p2p_parallelism": 123,
  "reboot": true,
  "reboot_at": 1624399840,
  "rrm_first_batch_percentage": 2,
  "rrm_max_batch_percentage": 10,
  "rrm_mesh_upgrade": "string_example",
  "rrm_node_order": "string_example",
  "rrm_slow_ramp": true,
  "rules": [
    {}
  ],
  "snapshot": true,
  "start_time": 1624399840,
  "strategy": "string_example",
  "version": "3.1.5"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UpgradeSiteDevices;

$model = new UpgradeSiteDevices({
  "canary_phases": [
    123
  ],
  "device_ids": [
    "string_example"
  ],
  "enable_p2p": true,
  "force": true,
  "max_failure_percentage": 123,
  "max_failures": [
    123
  ],
  "models": [
    "string_example"
  ],
  "p2p_cluster_size": 0,
  "p2p_parallelism": 123,
  "reboot": true,
  "reboot_at": 1624399840,
  "rrm_first_batch_percentage": 2,
  "rrm_max_batch_percentage": 10,
  "rrm_mesh_upgrade": "string_example",
  "rrm_node_order": "string_example",
  "rrm_slow_ramp": true,
  "rules": [
    {}
  ],
  "snapshot": true,
  "start_time": 1624399840,
  "strategy": "string_example",
  "version": "3.1.5"
});
$resp = $client->utilities upgrade->upgradeSiteDevices($model->toArray());
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

## `GET /api/v1/sites/{site_id}/devices/upgrade/{upgrade_id}`

**Summary:** getSiteDeviceUpgrade

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/upgrade/{upgrade_id}/cancel`

**Summary:** cancelSiteDeviceUpgrade

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/devices/versions`

**Summary:** listSiteAvailableDeviceVersions

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_default_ap`||
|`model`|query|false|`string`|Fetch version for device model, use/combine with `type` as needed (for switch and gateway devices)|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/upgrade`

**Summary:** upgradeDevice

**Request (raw array example)**

```json
{
  "reboot": true,
  "reboot_at": 123,
  "snapshot": true,
  "start_time": 123,
  "version": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\DeviceUpgrade;

$model = new DeviceUpgrade({
  "reboot": true,
  "reboot_at": 123,
  "snapshot": true,
  "start_time": 123,
  "version": "string_example"
});
$resp = $client->utilities upgrade->upgradeDevice($model->toArray());
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

## `GET /api/v1/sites/{site_id}/ssr/upgrade/{upgrade_id}`

**Summary:** getSiteSsrUpgrade

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/ssr/{device_id}/upgrade`

**Summary:** upgradeSsr

**Request (raw array example)**

```json
{
  "channel": "string_example",
  "reboot_at": 123,
  "start_time": 123,
  "version": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SsrUpgrade;

$model = new SsrUpgrade({
  "channel": "string_example",
  "reboot_at": 123,
  "start_time": 123,
  "version": "string_example"
});
$resp = $client->utilities upgrade->upgradeSsr($model->toArray());
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

