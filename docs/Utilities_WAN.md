# Utilities WAN API

## `POST /api/v1/sites/{site_id}/devices/{device_id}/clear_arp`

**Summary:** clearSiteSsrArpCache

**Request (raw array example)**

```json
{
  "ip": "10.1.1.1",
  "node": "string_example",
  "port_id": "wan",
  "vlan": 1000,
  "vrf": "guest"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsClearArp;

$model = new UtilsClearArp({
  "ip": "10.1.1.1",
  "node": "string_example",
  "port_id": "wan",
  "vlan": 1000,
  "vrf": "guest"
});
$resp = $client->utilities wan->clearSiteSsrArpCache($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/clear_bgp`

**Summary:** clearSiteBgpRoutes

**Request (raw array example)**

```json
{
  "neighbor": "string_example",
  "node": "string_example",
  "type": "string_example",
  "vrf": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsClearBgp;

$model = new UtilsClearBgp({
  "neighbor": "string_example",
  "node": "string_example",
  "type": "string_example",
  "vrf": "string_example"
});
$resp = $client->utilities wan->clearSiteSsrBgpRoutes($model->toArray());
print_r($resp);
```

**Responses**

- **200**: 
- **400**: Parameter neighbor absent
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/clear_session`

**Summary:** clearSiteDeviceSession

**Request (raw array example)**

```json
{
  "node": "string_example",
  "service_name": "internet-wan_and_lte",
  "session_ids": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsClearSession;

$model = new UtilsClearSession({
  "node": "string_example",
  "service_name": "internet-wan_and_lte",
  "session_ids": [
    "string_example"
  ]
});
$resp = $client->utilities wan->clearSiteDeviceSession($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/release_dhcp`

**Summary:** releaseSiteSsrDhcpLease

**Request (raw array example)**

```json
{
  "node": "string_example",
  "port_id": "ge-0/0/1.10"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsReleaseDhcp;

$model = new UtilsReleaseDhcp({
  "node": "string_example",
  "port_id": "ge-0/0/1.10"
});
$resp = $client->utilities wan->releaseSiteSsrDhcpLease($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/resolve_dns`

**Summary:** testSiteSsrDnsResolution

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/run_top`

**Summary:** runSiteSrxTopCommand

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/{device_id}/service_ping`

**Summary:** servicePingFromSsr

**Request (raw array example)**

```json
{
  "count": 123,
  "host": "string_example",
  "node": "string_example",
  "service": "string_example",
  "size": 123,
  "tenant": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsServicePing;

$model = new UtilsServicePing({
  "count": 123,
  "host": "string_example",
  "node": "string_example",
  "service": "string_example",
  "size": 123,
  "tenant": "string_example"
});
$resp = $client->utilities wan->servicePingFromSsr($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_ospf_database`

**Summary:** showSiteGatewayOspfDatabase

**Request (raw array example)**

```json
{
  "node": "string_example",
  "self_originate": true,
  "vrf": "lan"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowOspfDatabase;

$model = new UtilsShowOspfDatabase({
  "node": "string_example",
  "self_originate": true,
  "vrf": "lan"
});
$resp = $client->utilities wan->showSiteGatewayOspfDatabase($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_ospf_interfaces`

**Summary:** showSiteGatewayOspfInterfaces

**Request (raw array example)**

```json
{
  "node": "string_example",
  "port_id": "ge-0/0/3",
  "vrf": "lan"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowOspfInterfaces;

$model = new UtilsShowOspfInterfaces({
  "node": "string_example",
  "port_id": "ge-0/0/3",
  "vrf": "lan"
});
$resp = $client->utilities wan->showSiteGatewayOspfInterfaces($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_ospf_neighbors`

**Summary:** showSiteGatewayOspfNeighbors

**Request (raw array example)**

```json
{
  "neighbor": "10.1.1.1",
  "node": "string_example",
  "port_id": "ge-0/0/3",
  "vrf": "lan"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowOspfNeighbors;

$model = new UtilsShowOspfNeighbors({
  "neighbor": "10.1.1.1",
  "node": "string_example",
  "port_id": "ge-0/0/3",
  "vrf": "lan"
});
$resp = $client->utilities wan->showSiteGatewayOspfNeighbors($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_ospf_summary`

**Summary:** showSiteGatewayOspfSummary

**Request (raw array example)**

```json
{
  "node": "string_example",
  "vrf": "lan"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowOspfSummary;

$model = new UtilsShowOspfSummary({
  "node": "string_example",
  "vrf": "lan"
});
$resp = $client->utilities wan->showSiteGatewayOspfSummary($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_route`

**Summary:** showSiteSsrAndSrxRoutes

**Request (raw array example)**

```json
{
  "duration": 123,
  "interval": 123,
  "neighbor": "192.168.4.1",
  "node": {
    "node": "string_example"
  },
  "prefix": "192.168.0.5/30",
  "protocol": "string_example",
  "route": "advertised",
  "vrf": "default"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowRoute;

$model = new UtilsShowRoute({
  "duration": 123,
  "interval": 123,
  "neighbor": "192.168.4.1",
  "node": {
    "node": "string_example"
  },
  "prefix": "192.168.0.5/30",
  "protocol": "string_example",
  "route": "advertised",
  "vrf": "default"
});
$resp = $client->utilities wan->showSiteSsrAndSrxRoutes($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_service_path`

**Summary:** showSiteSsrServicePath

**Request (raw array example)**

```json
{
  "node": "string_example",
  "service_name": "any"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowServicePath;

$model = new UtilsShowServicePath({
  "node": "string_example",
  "service_name": "any"
});
$resp = $client->utilities wan->showSiteSsrServicePath($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/{device_id}/show_session`

**Summary:** showSiteSsrAndSrxSessions

**Request (raw array example)**

```json
{
  "node": "string_example",
  "service_name": "any",
  "session_id": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsShowSession;

$model = new UtilsShowSession({
  "node": "string_example",
  "service_name": "any",
  "session_id": "string_example"
});
$resp = $client->utilities wan->showSiteSsrAndSrxSessions($model->toArray());
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

