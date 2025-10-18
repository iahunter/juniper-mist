# Utilities Common API

## `POST /api/v1/sites/{site_id}/devices/restart`

**Summary:** restartSiteMultipleDevices

**Request (raw array example)**

```json
{
  "device_ids": [
    "string_example"
  ],
  "node": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsDevicesRestartMulti;

$model = new UtilsDevicesRestartMulti({
  "device_ids": [
    "string_example"
  ],
  "node": "string_example"
});
$resp = $client->utilities common->restartSiteMultipleDevices($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/arp`

**Summary:** arpFromDevice

**Request (raw array example)**

```json
{
  "node": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\HaClusterNode;

$model = new HaClusterNode({
  "node": "string_example"
});
$resp = $client->utilities common->arpFromDevice($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/bounce_port`

**Summary:** bounceDevicePort

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
use Iahunter\JuniperMist\Models\UtilsBouncePort;

$model = new UtilsBouncePort({
  "ports": [
    "string_example"
  ]
});
$resp = $client->utilities common->bounceDevicePort($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/clear_mac_table`

**Summary:** clearSiteDeviceMacTable

**Request (raw array example)**

```json
{
  "mac_address": "f8c1165c6400",
  "port_id": "ge-0/0/0.0",
  "vlan_id": "ge-0/0/0.0"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsMacTable;

$model = new UtilsMacTable({
  "mac_address": "f8c1165c6400",
  "port_id": "ge-0/0/0.0",
  "vlan_id": "ge-0/0/0.0"
});
$resp = $client->utilities common->clearSiteDeviceMacTable($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/clear_policy_hit_count`

**Summary:** clearSiteDevicePolicyHitCount

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/sites/{site_id}/devices/{device_id}/config_cmd`

**Summary:** getSiteDeviceConfigCmd

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`sort`|query|false|`boolean`|Make output cmds sorted (for better readability) or not.|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/locate`

**Summary:** startSiteLocateDevice

**Request (raw array example)**

```json
{
  "duration": 123,
  "mac": "f01c2d4ff760"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\LocateSwitch;

$model = new LocateSwitch({
  "duration": 123,
  "mac": "f01c2d4ff760"
});
$resp = $client->utilities common->startSiteLocateDevice($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/monitor_traffic`

**Summary:** monitorSiteDeviceTraffic

**Request (raw array example)**

```json
{
  "port": "ge-0/0/1"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsMonitorTraffic;

$model = new UtilsMonitorTraffic({
  "port": "ge-0/0/1"
});
$resp = $client->utilities common->monitorSiteDeviceTraffic($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/ping`

**Summary:** pingFromDevice

**Request (raw array example)**

```json
{
  "count": 123,
  "egress_interface": "string_example",
  "host": "1.1.1.1",
  "node": "string_example",
  "size": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsPing;

$model = new UtilsPing({
  "count": 123,
  "egress_interface": "string_example",
  "host": "1.1.1.1",
  "node": "string_example",
  "size": 123
});
$resp = $client->utilities common->pingFromDevice($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/readopt`

**Summary:** readoptSiteOctermDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/release_dhcp_leases`

**Summary:** releaseSiteDeviceDhcpLease

**Request (raw array example)**

```json
{
  "mac": [
    "string_example"
  ],
  "network": "guest",
  "node": "string_example",
  "port_id": "ge-0/0/1.10"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsReleaseDhcpLeases;

$model = new UtilsReleaseDhcpLeases({
  "mac": [
    "string_example"
  ],
  "network": "guest",
  "node": "string_example",
  "port_id": "ge-0/0/1.10"
});
$resp = $client->utilities common->releaseSiteDeviceDhcpLease($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: Parameter `port ` absent
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/reprovision`

**Summary:** readoptSiteOctermDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/request_ztp_password`

**Summary:** getSiteDeviceZtpPassword

**Responses**

- **200**: OK
```json
{
  "root_password": "string_example"
}
```
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/restart`

**Summary:** restartSiteDevice

**Request (raw array example)**

```json
{
  "member": 123,
  "node": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsDevicesRestart;

$model = new UtilsDevicesRestart({
  "member": 123,
  "node": "string_example"
});
$resp = $client->utilities common->restartSiteDevice($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/shell`

**Summary:** createSiteDeviceShellSession

**Request (raw array example)**

```json
{
  "node": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ShellNode;

$model = new ShellNode({
  "node": "string_example"
});
$resp = $client->utilities common->createSiteDeviceShellSession($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_arp`

**Summary:** showSiteDeviceArpTable

**Request (raw array example)**

```json
{
  "duration": 123,
  "interval": 123,
  "ip": "192.168.30.7",
  "port_id": "ge-0/0/0.0",
  "vrf": "guest"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowArp;

$model = new UtilsShowArp({
  "duration": 123,
  "interval": 123,
  "ip": "192.168.30.7",
  "port_id": "ge-0/0/0.0",
  "vrf": "guest"
});
$resp = $client->utilities common->showSiteDeviceArpTable($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_bgp_rummary`

**Summary:** showSiteDeviceBgpSummary

**Request (raw array example)**

```json
{
  "node": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowBgpSummary;

$model = new UtilsShowBgpSummary({
  "node": "string_example"
});
$resp = $client->utilities common->showSiteDeviceBgpSummary($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_dhcp_leases`

**Summary:** showSiteDeviceDhcpLeases

**Request (raw array example)**

```json
{
  "network": "guest",
  "node": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowDhcpLeases;

$model = new UtilsShowDhcpLeases({
  "network": "guest",
  "node": "string_example"
});
$resp = $client->utilities common->showSiteDeviceDhcpLeases($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_dot1x`

**Summary:** showSiteDeviceDot1xTable

**Request (raw array example)**

```json
{
  "duration": 123,
  "interval": 123,
  "port_id": "ge-0/0/0.0"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowDot1x;

$model = new UtilsShowDot1x({
  "duration": 123,
  "interval": 123,
  "port_id": "ge-0/0/0.0"
});
$resp = $client->utilities common->showSiteDeviceDot1xTable($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_evpn_database`

**Summary:** showSiteDeviceEvpnDatabase

**Request (raw array example)**

```json
{
  "duration": 123,
  "interval": 123,
  "mac": "f8c1165c6400",
  "port_id": "ge-0/0/0.0"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowEvpnDatabase;

$model = new UtilsShowEvpnDatabase({
  "duration": 123,
  "interval": 123,
  "mac": "f8c1165c6400",
  "port_id": "ge-0/0/0.0"
});
$resp = $client->utilities common->showSiteDeviceEvpnDatabase($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_forwarding_table`

**Summary:** showSiteDeviceForwardingTable

**Request (raw array example)**

```json
{
  "node": "string_example",
  "prefix": "3.1.1.0/24",
  "service_ip": "3.1.1.10",
  "service_name": "internet-wan_and_lte",
  "service_port": 32768,
  "service_protocol": "udp",
  "service_tenant": "branch1-wifi-mgt",
  "vrf": "guest"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowForwardingTable;

$model = new UtilsShowForwardingTable({
  "node": "string_example",
  "prefix": "3.1.1.0/24",
  "service_ip": "3.1.1.10",
  "service_name": "internet-wan_and_lte",
  "service_port": 32768,
  "service_protocol": "udp",
  "service_tenant": "branch1-wifi-mgt",
  "vrf": "guest"
});
$resp = $client->utilities common->showSiteDeviceForwardingTable($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_mac_table`

**Summary:** showSiteDeviceMacTable

**Request (raw array example)**

```json
{
  "mac_address": "f8c1165c6400",
  "port_id": "ge-0/0/0.0",
  "vlan_id": "ge-0/0/0.0"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsMacTable;

$model = new UtilsMacTable({
  "mac_address": "f8c1165c6400",
  "port_id": "ge-0/0/0.0",
  "vlan_id": "ge-0/0/0.0"
});
$resp = $client->utilities common->showSiteDeviceMacTable($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/support`

**Summary:** uploadSiteDeviceSupportFile

**Request (raw array example)**

```json
{
  "info": "string_example",
  "node": "string_example",
  "num_messages_files": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsSendSupportLogs;

$model = new UtilsSendSupportLogs({
  "info": "string_example",
  "node": "string_example",
  "num_messages_files": 123
});
$resp = $client->utilities common->uploadSiteDeviceSupportFile($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: Device not online
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/traceroute`

**Summary:** tracerouteFromDevice

**Request (raw array example)**

```json
{
  "host": "string_example",
  "network": "string_example",
  "node": "string_example",
  "port": 123,
  "protocol": "string_example",
  "timeout": 123,
  "vrf": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsTraceroute;

$model = new UtilsTraceroute({
  "host": "string_example",
  "network": "string_example",
  "node": "string_example",
  "port": 123,
  "protocol": "string_example",
  "timeout": 123,
  "vrf": "string_example"
});
$resp = $client->utilities common->tracerouteFromDevice($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/unlocate`

**Summary:** stopSiteLocateDevice

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

