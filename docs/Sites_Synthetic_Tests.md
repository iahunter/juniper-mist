# Sites Synthetic Tests API

## `POST /api/v1/sites/{site_id}/devices/{device_id}/check_radius_server`

**Summary:** triggerSiteSwitchRadiusSyntheticTest

**Request (raw array example)**

```json
{
  "password": "string_example",
  "profile": "string_example",
  "user": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SynthetictestRadiusServer;

$model = new SynthetictestRadiusServer({
  "password": "string_example",
  "profile": "string_example",
  "user": "string_example"
});
$resp = $client->sites synthetic tests->startSiteSwitchRadiusSyntheticTest($model->toArray());
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

## `GET /api/v1/sites/{site_id}/devices/{device_id}/synthetic_test`

**Summary:** getSiteDeviceSyntheticTest

**Responses**

- **200**: 
- **400**: Device not online / Device not supported / Already in progress
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/synthetic_test`

**Summary:** triggerSiteDeviceSyntheticTest

**Request (raw array example)**

```json
{
  "host": "www.example.com",
  "hostname": "google.com\"",
  "ip": "192.168.3.5",
  "password": "test123",
  "ping_count": 123,
  "ping_details": true,
  "ping_size": 123,
  "port_id": "wan0",
  "protocol": "string_example",
  "tenant": "lan_network1",
  "timeout": 60,
  "traceroute_udp_port": 123,
  "type": "string_example",
  "url": "https://www.example.com",
  "username": "user",
  "vlan_id": null
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\SynthetictestDevice;

$model = new SynthetictestDevice({
  "host": "www.example.com",
  "hostname": "google.com\"",
  "ip": "192.168.3.5",
  "password": "test123",
  "ping_count": 123,
  "ping_details": true,
  "ping_size": 123,
  "port_id": "wan0",
  "protocol": "string_example",
  "tenant": "lan_network1",
  "timeout": 60,
  "traceroute_udp_port": 123,
  "type": "string_example",
  "url": "https://www.example.com",
  "username": "user",
  "vlan_id": null
});
$resp = $client->sites synthetic tests->triggerSiteDeviceSyntheticTest($model->toArray());
print_r($resp);
```

**Responses**

- **200**: Scheduled
- **400**: Device not online / Device not supported / Already in progress
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/synthetic_test`

**Summary:** triggerSiteSyntheticTest

**Request (raw array example)**

```json
{
  "email": "test@mist.com"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Synthetictest;

$model = new Synthetictest({
  "email": "test@mist.com"
});
$resp = $client->sites synthetic tests->triggerSiteSyntheticTest($model->toArray());
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

## `GET /api/v1/sites/{site_id}/synthetic_test/search`

**Summary:** searchSiteSyntheticTest

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|Device MAC Address|
|`port_id`|query|false|`string`|Port_id used to run the test (for SSR only)|
|`vlan_id`|query|false|`string`|VLAN ID|
|`by`|query|false|`string`|Entity who triggers the test|
|`reason`|query|false|`string`|Test failure reason|
|`type`|query|false|`#/components/schemas/synthetictest_type`|Synthetic test type|
|`protocol`|query|false|`#/components/schemas/synthetictest_protocol`|Connectivity protocol|
|`tenant`|query|false|`string`|Tenant network in which lan_connectivity test was run|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

