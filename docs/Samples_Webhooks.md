# Samples Webhooks API

## `POST /webhook_example/_alarm_`

**Summary:** alarms

**Request (raw array example)**

```json
{
  "events": [
    {
      "aps": [
        "string_example"
      ],
      "bssids": [
        "string_example"
      ],
      "count": 123,
      "event_id": "string_example",
      "for_site": true,
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "last_seen": 1470417522,
      "node": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "ssids": [
        "string_example"
      ],
      "timestamp": 1.23,
      "type": "string_example",
      "update": true
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookAlarms;

$model = new WebhookAlarms({
  "events": [
    {
      "aps": [
        "string_example"
      ],
      "bssids": [
        "string_example"
      ],
      "count": 123,
      "event_id": "string_example",
      "for_site": true,
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "last_seen": 1470417522,
      "node": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "ssids": [
        "string_example"
      ],
      "timestamp": 1.23,
      "type": "string_example",
      "update": true
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->alarms($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_audit_`

**Summary:** audits

**Request (raw array example)**

```json
{
  "events": [
    {
      "admin_name": "string_example",
      "device_id": "00000000-0000-0000-1000-d8695a0f9e61",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "message": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "src_ip": "string_example",
      "timestamp": 1.23
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookAudits;

$model = new WebhookAudits({
  "events": [
    {
      "admin_name": "string_example",
      "device_id": "00000000-0000-0000-1000-d8695a0f9e61",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "message": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "src_ip": "string_example",
      "timestamp": 1.23
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->audits($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_client_info_`

**Summary:** clientJoin

**Request (raw array example)**

```json
{
  "events": [
    {
      "hostname": "service.company.net",
      "ip": "string_example",
      "mac": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookClientInfo;

$model = new WebhookClientInfo({
  "events": [
    {
      "hostname": "service.company.net",
      "ip": "string_example",
      "mac": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->clientInfo($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_client_join_`

**Summary:** clientJoin

**Request (raw array example)**

```json
{
  "events": [
    {
      "ap": "string_example",
      "ap_name": "string_example",
      "band": "string_example",
      "bssid": "string_example",
      "connect": 123,
      "connect_float": 1.23,
      "mac": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "rssi": 1.23,
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example",
      "ssid": "string_example",
      "timestamp": 1.23,
      "version": 1.23,
      "wlan_id": "string_example"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookClientJoin;

$model = new WebhookClientJoin({
  "events": [
    {
      "ap": "string_example",
      "ap_name": "string_example",
      "band": "string_example",
      "bssid": "string_example",
      "connect": 123,
      "connect_float": 1.23,
      "mac": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "rssi": 1.23,
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example",
      "ssid": "string_example",
      "timestamp": 1.23,
      "version": 1.23,
      "wlan_id": "string_example"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->clientJoin($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_client_latency_`

**Summary:** alarms

**Request (raw array example)**

```json
{
  "events": [
    {
      "avg_auth": 0.17170219,
      "avg_dhcp": 0.017828934,
      "avg_dns": 0.024532124,
      "max_auth": 0.18170219,
      "max_dhcp": 0.027828934,
      "max_dns": 0.022532124,
      "min_auth": 0.16050219,
      "min_dhcp": 0.015828934,
      "min_dns": 0.029532124,
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23
    }
  ],
  "topic": "client-latency"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookClientLatency;

$model = new WebhookClientLatency({
  "events": [
    {
      "avg_auth": 0.17170219,
      "avg_dhcp": 0.017828934,
      "avg_dns": 0.024532124,
      "max_auth": 0.18170219,
      "max_dhcp": 0.027828934,
      "max_dns": 0.022532124,
      "min_auth": 0.16050219,
      "min_dhcp": 0.015828934,
      "min_dns": 0.029532124,
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23
    }
  ],
  "topic": "client-latency"
});
$resp = $client->samples webhooks->client_latency($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_client_sessions_`

**Summary:** clientSessions

**Request (raw array example)**

```json
{
  "events": [
    {
      "ap": "string_example",
      "ap_name": "string_example",
      "band": "string_example",
      "bssid": "string_example",
      "client_family": "string_example",
      "client_manufacture": "string_example",
      "client_model": "string_example",
      "client_os": "string_example",
      "connect": 123,
      "connect_float": 1.23,
      "disconnect": 123,
      "disconnect_float": 1.23,
      "duration": 123,
      "mac": "string_example",
      "next_ap": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "rssi": 1.23,
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example",
      "ssid": "string_example",
      "termination_reason": 123,
      "timestamp": 1.23,
      "version": 1.23,
      "wlan_id": "string_example"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookClientSessions;

$model = new WebhookClientSessions({
  "events": [
    {
      "ap": "string_example",
      "ap_name": "string_example",
      "band": "string_example",
      "bssid": "string_example",
      "client_family": "string_example",
      "client_manufacture": "string_example",
      "client_model": "string_example",
      "client_os": "string_example",
      "connect": 123,
      "connect_float": 1.23,
      "disconnect": 123,
      "disconnect_float": 1.23,
      "duration": 123,
      "mac": "string_example",
      "next_ap": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "rssi": 1.23,
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example",
      "ssid": "string_example",
      "termination_reason": 123,
      "timestamp": 1.23,
      "version": 1.23,
      "wlan_id": "string_example"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->clientSessions($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: 

---

## `POST /webhook_example/_device_events_`

**Summary:** deviceEvents

**Request (raw array example)**

```json
{
  "events": [
    {
      "ap": "string_example",
      "ap_name": "string_example",
      "audit_id": "string_example",
      "device_name": "string_example",
      "device_type": "string_example",
      "ev_type": "string_example",
      "mac": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "reason": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example",
      "text": "string_example",
      "timestamp": 1.23,
      "type": "string_example"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookDeviceEvents;

$model = new WebhookDeviceEvents({
  "events": [
    {
      "ap": "string_example",
      "ap_name": "string_example",
      "audit_id": "string_example",
      "device_name": "string_example",
      "device_type": "string_example",
      "ev_type": "string_example",
      "mac": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "reason": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example",
      "text": "string_example",
      "timestamp": 1.23,
      "type": "string_example"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->deviceEvents($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_device_updowns_`

**Summary:** deviceUpDown

**Request (raw array example)**

```json
{
  "events": [
    {
      "ap": "string_example",
      "ap_name": "string_example",
      "for_site": true,
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example",
      "timestamp": 1.23,
      "type": "string_example"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookDeviceUpdowns;

$model = new WebhookDeviceUpdowns({
  "events": [
    {
      "ap": "string_example",
      "ap_name": "string_example",
      "for_site": true,
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example",
      "timestamp": 1.23,
      "type": "string_example"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->deviceUpDown($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_discovered_raw_rssi_`

**Summary:** discovered-raw-rssi

**Request (raw array example)**

```json
{
  "events": [
    {
      "ap_loc": [
        1.23
      ],
      "beam": 123,
      "device_id": "string_example",
      "ibeacon_major": 123,
      "ibeacon_minor": 123,
      "ibeacon_uuid": "string_example",
      "is_asset": true,
      "mac": "string_example",
      "map_id": "string_example",
      "mfg_company_id": "string_example",
      "mfg_data": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "rssi": 1.23,
      "service_packets": [
        {
          "service_data": "string_example",
          "service_uuid": "string_example"
        }
      ],
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookDiscoveredRawRssi;

$model = new WebhookDiscoveredRawRssi({
  "events": [
    {
      "ap_loc": [
        1.23
      ],
      "beam": 123,
      "device_id": "string_example",
      "ibeacon_major": 123,
      "ibeacon_minor": 123,
      "ibeacon_uuid": "string_example",
      "is_asset": true,
      "mac": "string_example",
      "map_id": "string_example",
      "mfg_company_id": "string_example",
      "mfg_data": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "rssi": 1.23,
      "service_packets": [
        {
          "service_data": "string_example",
          "service_uuid": "string_example"
        }
      ],
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->discovered-raw-rssi($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_guest_authorizations_`

**Summary:** guestAuthorization

**Request (raw array example)**

```json
{
  "events": [
    {
      "ap": "5c5b350e55c8",
      "auth_method": "passphrase",
      "authorized_expiring_time": 1677076639,
      "authorized_time": 1677076519,
      "carrier": "docomo",
      "client": "ac2316eca70a",
      "company": "MIST",
      "email": "abcd@abcd.com",
      "field1": "field1 value",
      "field2": "field2 value",
      "field3": "field3 value",
      "field4": "field4 value",
      "mobile": "+0123456789",
      "name": "Dr Strange",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sms_gateway": "Telstra",
      "sponsor_email": "sponsor@gmail.com",
      "ssid": "Portal Auth",
      "wlan_id": "7681be9a-044a-4622-90cf-3accde5ad853"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookGuestAuthorizations;

$model = new WebhookGuestAuthorizations({
  "events": [
    {
      "ap": "5c5b350e55c8",
      "auth_method": "passphrase",
      "authorized_expiring_time": 1677076639,
      "authorized_time": 1677076519,
      "carrier": "docomo",
      "client": "ac2316eca70a",
      "company": "MIST",
      "email": "abcd@abcd.com",
      "field1": "field1 value",
      "field2": "field2 value",
      "field3": "field3 value",
      "field4": "field4 value",
      "mobile": "+0123456789",
      "name": "Dr Strange",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sms_gateway": "Telstra",
      "sponsor_email": "sponsor@gmail.com",
      "ssid": "Portal Auth",
      "wlan_id": "7681be9a-044a-4622-90cf-3accde5ad853"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->guestAuthorization($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_location_`

**Summary:** location

**Request (raw array example)**

```json
{
  "events": [
    {
      "battery_voltage": 123,
      "eddystone_uid_instance": "string_example",
      "eddystone_uid_namespace": "string_example",
      "eddystone_url_url": "string_example",
      "ibeacon_major": 123,
      "ibeacon_minor": 123,
      "ibeacon_uuid": "string_example",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "mac": "string_example",
      "map_id": "string_example",
      "mfg_company_id": 123,
      "mfg_data": "string_example",
      "name": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "wifi_beacon_extended_info": [
        {
          "frame_ctrl": 123,
          "payload": "string_example",
          "seq_ctrl": 123
        }
      ],
      "x": 1.23,
      "y": 1.23
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookLocation;

$model = new WebhookLocation({
  "events": [
    {
      "battery_voltage": 123,
      "eddystone_uid_instance": "string_example",
      "eddystone_uid_namespace": "string_example",
      "eddystone_url_url": "string_example",
      "ibeacon_major": 123,
      "ibeacon_minor": 123,
      "ibeacon_uuid": "string_example",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "mac": "string_example",
      "map_id": "string_example",
      "mfg_company_id": 123,
      "mfg_data": "string_example",
      "name": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "wifi_beacon_extended_info": [
        {
          "frame_ctrl": 123,
          "payload": "string_example",
          "seq_ctrl": 123
        }
      ],
      "x": 1.23,
      "y": 1.23
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->location($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_location_asset_`

**Summary:** location

**Request (raw array example)**

```json
{
  "events": [
    {
      "battery_voltage": 3370,
      "eddystone_uid_instance": "5c5b35000001",
      "eddystone_uid_namespace": "2818e3868dec25629ede",
      "eddystone_url_url": "https://www.abc.com",
      "ibeacon_major": 13,
      "ibeacon_minor": 138,
      "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
      "mac": "7fc2936fd243",
      "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
      "mfg_company_id": 935,
      "mfg_data": "648520a1020000",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "x": 13.5,
      "y": 3.2
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookLocationAsset;

$model = new WebhookLocationAsset({
  "events": [
    {
      "battery_voltage": 3370,
      "eddystone_uid_instance": "5c5b35000001",
      "eddystone_uid_namespace": "2818e3868dec25629ede",
      "eddystone_url_url": "https://www.abc.com",
      "ibeacon_major": 13,
      "ibeacon_minor": 138,
      "ibeacon_uuid": "f3f17139-704a-f03a-2786-0400279e37c3",
      "mac": "7fc2936fd243",
      "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
      "mfg_company_id": 935,
      "mfg_data": "648520a1020000",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "x": 13.5,
      "y": 3.2
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->location_asset($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_location_centrak_`

**Summary:** alarms

**Request (raw array example)**

```json
{
  "events": [
    {
      "map_id": "string_example",
      "mfg_company_id": 123,
      "mfg_data": "string_example",
      "timestamp": 1.23,
      "wifi_beacon_extended_info": [
        {
          "frame_ctrl": 123,
          "payload": "string_example",
          "seq_ctrl": 123
        }
      ],
      "x": 1.23,
      "y": 1.23
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookLocationCentrak;

$model = new WebhookLocationCentrak({
  "events": [
    {
      "map_id": "string_example",
      "mfg_company_id": 123,
      "mfg_data": "string_example",
      "timestamp": 1.23,
      "wifi_beacon_extended_info": [
        {
          "frame_ctrl": 123,
          "payload": "string_example",
          "seq_ctrl": 123
        }
      ],
      "x": 1.23,
      "y": 1.23
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->location_centrak($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_location_client_`

**Summary:** location

**Request (raw array example)**

```json
{
  "events": [
    {
      "mac": "5684dae9ac8b",
      "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "wifi_beacon_extended_info": [
        {
          "frame_ctrl": 123,
          "payload": "string_example",
          "seq_ctrl": 123
        }
      ],
      "x": 13.5,
      "y": 3.2
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookLocationClient;

$model = new WebhookLocationClient({
  "events": [
    {
      "mac": "5684dae9ac8b",
      "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "wifi_beacon_extended_info": [
        {
          "frame_ctrl": 123,
          "payload": "string_example",
          "seq_ctrl": 123
        }
      ],
      "x": 13.5,
      "y": 3.2
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->location_client($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_location_sdk_`

**Summary:** location

**Request (raw array example)**

```json
{
  "events": [
    {
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
      "name": "optional",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "x": 13.5,
      "y": 3.2
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookLocationSdk;

$model = new WebhookLocationSdk({
  "events": [
    {
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
      "name": "optional",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "x": 13.5,
      "y": 3.2
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->location_sdk($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_location_unclient_`

**Summary:** location

**Request (raw array example)**

```json
{
  "events": [
    {
      "mac": "5684dae9ac8b",
      "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "wifi_beacon_extended_info": [
        {
          "frame_ctrl": 123,
          "payload": "string_example",
          "seq_ctrl": 123
        }
      ],
      "x": 13.5,
      "y": 3.2
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookLocationUnclient;

$model = new WebhookLocationUnclient({
  "events": [
    {
      "mac": "5684dae9ac8b",
      "map_id": "845a23bf-bed9-e43c-4c86-6fa474be7ae5",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "type": "string_example",
      "wifi_beacon_extended_info": [
        {
          "frame_ctrl": 123,
          "payload": "string_example",
          "seq_ctrl": 123
        }
      ],
      "x": 13.5,
      "y": 3.2
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->location_unclient($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_nac_accounting_`

**Summary:** nacAccounting

**Request (raw array example)**

```json
{
  "events": [
    {
      "ap": "5c5b355005be",
      "auth_type": "eap-tls",
      "bssid": "5c5b35546bb4",
      "client_ip": "172.16.87.4",
      "client_type": "wireless",
      "mac": "6e795836d5f9",
      "nas_vendor": "juniper-mist",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "rx_pkts": 57770567,
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "ssid": "Test-CMR SSID",
      "timestamp": 1.23,
      "tx_pkts": 812204062,
      "type": "NAC_ACCOUNTING_STOP",
      "username": "hi"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookNacAccounting;

$model = new WebhookNacAccounting({
  "events": [
    {
      "ap": "5c5b355005be",
      "auth_type": "eap-tls",
      "bssid": "5c5b35546bb4",
      "client_ip": "172.16.87.4",
      "client_type": "wireless",
      "mac": "6e795836d5f9",
      "nas_vendor": "juniper-mist",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "rx_pkts": 57770567,
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "ssid": "Test-CMR SSID",
      "timestamp": 1.23,
      "tx_pkts": 812204062,
      "type": "NAC_ACCOUNTING_STOP",
      "username": "hi"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->nacAccounting($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_nac_events_`

**Summary:** nac_events

**Request (raw array example)**

```json
{
  "events": [
    {
      "ap": "5c5b35513227",
      "auth_type": "eap-tls",
      "bssid": "5c5b355fafcc",
      "client_type": "wireless",
      "device_mac": "60c78d8c7f6f",
      "dryrun_nacrule_id": "32f27e7d-ff26-4a9b-b3d1-ff9bcb264012",
      "dryrun_nacrule_matched": true,
      "idp_id": "912ef72e-2239-4996-b81e-469e87a27cd6",
      "idp_role": [
        "string_example"
      ],
      "idp_username": "user@deaflyz.net",
      "mac": "ac3eb179e535",
      "nacrule_id": "32f27e7d-ff26-4a9b-b3d1-ff9bcb264c62",
      "nacrule_matched": true,
      "nas_vendor": "juniper-mist",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "port_id": [
        "string_example"
      ],
      "random_mac": true,
      "resp_attrs": [
        "string_example"
      ],
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "ssid": "MyCorp-NAC",
      "timestamp": 1.23,
      "type": "NAC_CLIENT_PERMIT",
      "username": "string_example",
      "vlan": "string_example",
      "vlan_source": "nactag"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookNacEvents;

$model = new WebhookNacEvents({
  "events": [
    {
      "ap": "5c5b35513227",
      "auth_type": "eap-tls",
      "bssid": "5c5b355fafcc",
      "client_type": "wireless",
      "device_mac": "60c78d8c7f6f",
      "dryrun_nacrule_id": "32f27e7d-ff26-4a9b-b3d1-ff9bcb264012",
      "dryrun_nacrule_matched": true,
      "idp_id": "912ef72e-2239-4996-b81e-469e87a27cd6",
      "idp_role": [
        "string_example"
      ],
      "idp_username": "user@deaflyz.net",
      "mac": "ac3eb179e535",
      "nacrule_id": "32f27e7d-ff26-4a9b-b3d1-ff9bcb264c62",
      "nacrule_matched": true,
      "nas_vendor": "juniper-mist",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "port_id": [
        "string_example"
      ],
      "random_mac": true,
      "resp_attrs": [
        "string_example"
      ],
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "ssid": "MyCorp-NAC",
      "timestamp": 1.23,
      "type": "NAC_CLIENT_PERMIT",
      "username": "string_example",
      "vlan": "string_example",
      "vlan_source": "nactag"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->nac_events($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_occupancy_alerts_`

**Summary:** occupancyAlerts

**Request (raw array example)**

```json
{
  "events": [
    {
      "alert_events": [
        {
          "current_occupancy": 123,
          "map_id": "string_example",
          "occupancy_limit": 123,
          "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
          "timestamp": 1.23,
          "type": "string_example",
          "zone_id": "string_example",
          "zone_name": "string_example"
        }
      ],
      "for_site": true,
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookOccupancyAlerts;

$model = new WebhookOccupancyAlerts({
  "events": [
    {
      "alert_events": [
        {
          "current_occupancy": 123,
          "map_id": "string_example",
          "occupancy_limit": 123,
          "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
          "timestamp": 1.23,
          "type": "string_example",
          "zone_id": "string_example",
          "zone_name": "string_example"
        }
      ],
      "for_site": true,
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "site_name": "string_example"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->occupancyAlerts($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_ping_`

**Summary:** ping

**Request (raw array example)**

```json
{
  "events": [
    {
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "name": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookPing;

$model = new WebhookPing({
  "events": [
    {
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "name": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->ping($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_sdkclient_scan_data`

**Summary:** sdkclientScanData

**Request (raw array example)**

```json
{
  "events": [
    {
      "connection_ap": "string_example",
      "connection_band": "string_example",
      "connection_bssid": "string_example",
      "connection_channel": 123,
      "connection_rssi": 1.23,
      "last_seen": 1470417522,
      "mac": "string_example",
      "scan_data": [
        {
          "ap": "string_example",
          "band": "string_example",
          "bssid": "string_example",
          "channel": 123,
          "rssi": 1.23,
          "ssid": "string_example",
          "timestamp": 1.23
        }
      ],
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookSdkclientScanData;

$model = new WebhookSdkclientScanData({
  "events": [
    {
      "connection_ap": "string_example",
      "connection_band": "string_example",
      "connection_bssid": "string_example",
      "connection_channel": 123,
      "connection_rssi": 1.23,
      "last_seen": 1470417522,
      "mac": "string_example",
      "scan_data": [
        {
          "ap": "string_example",
          "band": "string_example",
          "bssid": "string_example",
          "channel": 123,
          "rssi": 1.23,
          "ssid": "string_example",
          "timestamp": 1.23
        }
      ],
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->sdkclientScanData($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_site_sle_`

**Summary:** site_sle

**Request (raw array example)**

```json
{
  "events": [
    {
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sle": {
        "ap-availability": 0.6,
        "successful-connect": 0.7,
        "time-to-connect": 0.9
      },
      "timestamp": 1.23
    }
  ],
  "topic": "site_sle"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookSiteSle;

$model = new WebhookSiteSle({
  "events": [
    {
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sle": {
        "ap-availability": 0.6,
        "successful-connect": 0.7,
        "time-to-connect": 0.9
      },
      "timestamp": 1.23
    }
  ],
  "topic": "site_sle"
});
$resp = $client->samples webhooks->site_sle($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

## `POST /webhook_example/_zone_`

**Summary:** zone

**Request (raw array example)**

```json
{
  "events": [
    {
      "asset_id": "string_example",
      "id": "string_example",
      "mac": "string_example",
      "map_id": "string_example",
      "name": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "trigger": "string_example",
      "type": "string_example",
      "zone_id": "string_example"
    }
  ],
  "topic": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WebhookZone;

$model = new WebhookZone({
  "events": [
    {
      "asset_id": "string_example",
      "id": "string_example",
      "mac": "string_example",
      "map_id": "string_example",
      "name": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "timestamp": 1.23,
      "trigger": "string_example",
      "type": "string_example",
      "zone_id": "string_example"
    }
  ],
  "topic": "string_example"
});
$resp = $client->samples webhooks->zone($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 

---

