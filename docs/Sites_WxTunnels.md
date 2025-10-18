# Sites WxTunnels API

## `GET /api/v1/sites/{site_id}/wxtunnels`

**Summary:** listSiteWxTunnels

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `POST /api/v1/sites/{site_id}/wxtunnels`

**Summary:** createSiteWxTunnel

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "dmvpn": {
    "enabled": true,
    "holding_time": 123,
    "host_routes": [
      "string_example"
    ]
  },
  "for_mgmt": true,
  "for_site": true,
  "hello_interval": 123,
  "hello_retries": 123,
  "hostname": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "ipsec": {
    "enabled": true,
    "psk": "string_example"
  },
  "is_static": true,
  "modified_time": 1.23,
  "mtu": 123,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "peers": [
    "string_example"
  ],
  "router_id": "string_example",
  "secret": "string_example",
  "sessions": [
    {
      "ap_as_session_id": "string_example",
      "comment": "string_example",
      "enable_cookie": true,
      "ethertype": "string_example",
      "local_session_id": 123,
      "pseudo_802.1ad_enabled": true,
      "remote_id": "string_example",
      "remote_session_id": 123,
      "use_ap_as_session_ids": true
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "udp_port": 123,
  "use_udp": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WxlanTunnel;

$model = new WxlanTunnel({
  "created_time": 1.23,
  "dmvpn": {
    "enabled": true,
    "holding_time": 123,
    "host_routes": [
      "string_example"
    ]
  },
  "for_mgmt": true,
  "for_site": true,
  "hello_interval": 123,
  "hello_retries": 123,
  "hostname": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "ipsec": {
    "enabled": true,
    "psk": "string_example"
  },
  "is_static": true,
  "modified_time": 1.23,
  "mtu": 123,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "peers": [
    "string_example"
  ],
  "router_id": "string_example",
  "secret": "string_example",
  "sessions": [
    {
      "ap_as_session_id": "string_example",
      "comment": "string_example",
      "enable_cookie": true,
      "ethertype": "string_example",
      "local_session_id": 123,
      "pseudo_802.1ad_enabled": true,
      "remote_id": "string_example",
      "remote_session_id": 123,
      "use_ap_as_session_ids": true
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "udp_port": 123,
  "use_udp": true
});
$resp = $client->sites wxtunnels->createSiteWxTunnel($model->toArray());
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

## `GET /api/v1/sites/{site_id}/wxtunnels/{wxtunnel_id}`

**Summary:** getSiteWxTunnel

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/sites/{site_id}/wxtunnels/{wxtunnel_id}`

**Summary:** updateSiteWxTunnel

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "dmvpn": {
    "enabled": true,
    "holding_time": 123,
    "host_routes": [
      "string_example"
    ]
  },
  "for_mgmt": true,
  "for_site": true,
  "hello_interval": 123,
  "hello_retries": 123,
  "hostname": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "ipsec": {
    "enabled": true,
    "psk": "string_example"
  },
  "is_static": true,
  "modified_time": 1.23,
  "mtu": 123,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "peers": [
    "string_example"
  ],
  "router_id": "string_example",
  "secret": "string_example",
  "sessions": [
    {
      "ap_as_session_id": "string_example",
      "comment": "string_example",
      "enable_cookie": true,
      "ethertype": "string_example",
      "local_session_id": 123,
      "pseudo_802.1ad_enabled": true,
      "remote_id": "string_example",
      "remote_session_id": 123,
      "use_ap_as_session_ids": true
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "udp_port": 123,
  "use_udp": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\WxlanTunnel;

$model = new WxlanTunnel({
  "created_time": 1.23,
  "dmvpn": {
    "enabled": true,
    "holding_time": 123,
    "host_routes": [
      "string_example"
    ]
  },
  "for_mgmt": true,
  "for_site": true,
  "hello_interval": 123,
  "hello_retries": 123,
  "hostname": "string_example",
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "ipsec": {
    "enabled": true,
    "psk": "string_example"
  },
  "is_static": true,
  "modified_time": 1.23,
  "mtu": 123,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "peers": [
    "string_example"
  ],
  "router_id": "string_example",
  "secret": "string_example",
  "sessions": [
    {
      "ap_as_session_id": "string_example",
      "comment": "string_example",
      "enable_cookie": true,
      "ethertype": "string_example",
      "local_session_id": 123,
      "pseudo_802.1ad_enabled": true,
      "remote_id": "string_example",
      "remote_session_id": 123,
      "use_ap_as_session_ids": true
    }
  ],
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "udp_port": 123,
  "use_udp": true
});
$resp = $client->sites wxtunnels->updateSiteWxTunnel($model->toArray());
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

## `DELETE /api/v1/sites/{site_id}/wxtunnels/{wxtunnel_id}`

**Summary:** deleteSiteWxTunnel

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

