# Utilities LAN API

## `POST /api/v1/orgs/{org_id}/wired_clients/{client_mac}/coa`

**Summary:** reauthOrgDot1xWiredClient

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/clear_pending_version`

**Summary:** clearSiteMultipleDevicePendingVersion

**Responses**

- **200**: 
- **400**: Bad Request
```json
"string_example"
```
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/restore_backup_version`

**Summary:** restoreSiteMultipleDeviceBackupVersion

**Responses**

- **200**: 
- **400**: Bad Request
```json
"string_example"
```
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/upgrade_bios`

**Summary:** upgradeSiteDevicesBios

**Request (raw array example)**

```json
{
  "device_ids": [
    "00000000-0000-0000-1000-5c5b35584a6f"
  ],
  "models": [
    "EX4400-48T"
  ],
  "reboot": true,
  "version": "CDEN_P_EX1_00.15.01.00"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UpgradeBiosMulti;

$model = new UpgradeBiosMulti({
  "device_ids": [
    "00000000-0000-0000-1000-5c5b35584a6f"
  ],
  "models": [
    "EX4400-48T"
  ],
  "reboot": true,
  "version": "CDEN_P_EX1_00.15.01.00"
});
$resp = $client->utilities lan->upgradeSiteDevicesBios($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/upgrade_fpga`

**Summary:** upgradeSiteDevicesFpga

**Request (raw array example)**

```json
{
  "device_ids": [
    "00000000-0000-0000-1000-5c5b35584a6f"
  ],
  "models": [
    "EX4400-48T"
  ],
  "reboot": true,
  "version": "REV37"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UpgradeFpgaMulti;

$model = new UpgradeFpgaMulti({
  "device_ids": [
    "00000000-0000-0000-1000-5c5b35584a6f"
  ],
  "models": [
    "EX4400-48T"
  ],
  "reboot": true,
  "version": "REV37"
});
$resp = $client->utilities lan->upgradeSiteDevicesFpga($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/cable_test`

**Summary:** cableTestFromSwitch

**Request (raw array example)**

```json
{
  "port": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsCableTests;

$model = new UtilsCableTests({
  "port": "string_example"
});
$resp = $client->utilities lan->cableTestFromSwitch($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/clear_bpdu_error`

**Summary:** clearBpduErrorsFromPortsOnSwitch

**Request (raw array example)**

```json
{
  "port": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsClearBpdu;

$model = new UtilsClearBpdu({
  "port": "string_example"
});
$resp = $client->utilities lan->clearBpduErrorsFromPortsOnSwitch($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: Port not specified
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/clear_dot1x`

**Summary:** clearSiteDeviceDot1xSession

**Request (raw array example)**

```json
{
  "port_id": "ge-0/0/0"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ClearDot1xSession;

$model = new ClearDot1xSession({
  "port_id": "ge-0/0/0"
});
$resp = $client->utilities lan->clearSiteDeviceDot1xSession($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/clear_macs`

**Summary:** clearAllLearnedMacsFromPortOnSwitch

**Request (raw array example)**

```json
{
  "ports": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsClearMacs;

$model = new UtilsClearMacs({
  "ports": [
    "string_example"
  ]
});
$resp = $client->utilities lan->clearAllLearnedMacsFromPortOnSwitch($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/clear_pending_version`

**Summary:** clearSiteDevicePendingVersion

**Responses**

- **200**: 
- **400**: Bad Request
```json
"string_example"
```
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/poll_stats`

**Summary:** pollSiteSwitchStats

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/restore_backup_version`

**Summary:** restoreSiteDeviceBackupVersion

**Responses**

- **200**: 
- **400**: Bad Request
```json
"string_example"
```
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/snapshot`

**Summary:** createSiteDeviceSnapshot

**Responses**

- **200**: 
- **400**: Bad Request
```json
"string_example"
```
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/upgrade_bios`

**Summary:** upgradeDeviceBios

**Request (raw array example)**

```json
{
  "reboot": true,
  "version": "CDEN_P_EX1_00.20.01.00"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UpgradeBios;

$model = new UpgradeBios({
  "reboot": true,
  "version": "CDEN_P_EX1_00.20.01.00"
});
$resp = $client->utilities lan->upgradeDeviceBios($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/upgrade_fpga`

**Summary:** upgradeDeviceFPGA

**Request (raw array example)**

```json
{
  "reboot": true,
  "version": "REV37"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UpgradeFpga;

$model = new UpgradeFpga({
  "reboot": true,
  "version": "REV37"
});
$resp = $client->utilities lan->upgradeDeviceFPGA($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/vc/switch_master`

**Summary:** toogleSiteDeviceVcRoutingEnginesRole

**Responses**

- **200**: 
- **400**: Bad Request
```json
"string_example"
```
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/wired_clients/{client_mac}/coa`

**Summary:** reauthSiteDot1xWiredClient

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

