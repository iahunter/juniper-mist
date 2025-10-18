# Orgs Services API

## `GET /api/v1/orgs/{org_id}/services`

**Summary:** listOrgServices

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

## `POST /api/v1/orgs/{org_id}/services`

**Summary:** createOrgService

**Request (raw array example)**

```json
{
  "addresses": [
    "string_example"
  ],
  "app_categories": [
    "string_example"
  ],
  "app_subcategories": [
    "string_example"
  ],
  "apps": [
    "string_example"
  ],
  "client_limit_down": 300000,
  "client_limit_up": 300000,
  "created_time": 1.23,
  "description": "string_example",
  "dscp": null,
  "failover_policy": "string_example",
  "hostnames": [
    "example.com"
  ],
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_jitter": null,
  "max_latency": null,
  "max_loss": null,
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "service_limit_down": 300000,
  "service_limit_up": 300000,
  "sle_enabled": true,
  "specs": [
    {
      "port_range": "8080,8443",
      "protocol": "tcp"
    }
  ],
  "ssr_relaxed_tcp_state_enforcement": true,
  "traffic_class": "string_example",
  "traffic_type": "string_example",
  "type": "string_example",
  "urls": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Service;

$model = new Service({
  "addresses": [
    "string_example"
  ],
  "app_categories": [
    "string_example"
  ],
  "app_subcategories": [
    "string_example"
  ],
  "apps": [
    "string_example"
  ],
  "client_limit_down": 300000,
  "client_limit_up": 300000,
  "created_time": 1.23,
  "description": "string_example",
  "dscp": null,
  "failover_policy": "string_example",
  "hostnames": [
    "example.com"
  ],
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_jitter": null,
  "max_latency": null,
  "max_loss": null,
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "service_limit_down": 300000,
  "service_limit_up": 300000,
  "sle_enabled": true,
  "specs": [
    {
      "port_range": "8080,8443",
      "protocol": "tcp"
    }
  ],
  "ssr_relaxed_tcp_state_enforcement": true,
  "traffic_class": "string_example",
  "traffic_type": "string_example",
  "type": "string_example",
  "urls": [
    "string_example"
  ]
});
$resp = $client->orgs services->createOrgService($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/services/{service_id}`

**Summary:** getOrgService

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/services/{service_id}`

**Summary:** updateOrgService

**Request (raw array example)**

```json
{
  "addresses": [
    "string_example"
  ],
  "app_categories": [
    "string_example"
  ],
  "app_subcategories": [
    "string_example"
  ],
  "apps": [
    "string_example"
  ],
  "client_limit_down": 300000,
  "client_limit_up": 300000,
  "created_time": 1.23,
  "description": "string_example",
  "dscp": null,
  "failover_policy": "string_example",
  "hostnames": [
    "example.com"
  ],
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_jitter": null,
  "max_latency": null,
  "max_loss": null,
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "service_limit_down": 300000,
  "service_limit_up": 300000,
  "sle_enabled": true,
  "specs": [
    {
      "port_range": "8080,8443",
      "protocol": "tcp"
    }
  ],
  "ssr_relaxed_tcp_state_enforcement": true,
  "traffic_class": "string_example",
  "traffic_type": "string_example",
  "type": "string_example",
  "urls": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Service;

$model = new Service({
  "addresses": [
    "string_example"
  ],
  "app_categories": [
    "string_example"
  ],
  "app_subcategories": [
    "string_example"
  ],
  "apps": [
    "string_example"
  ],
  "client_limit_down": 300000,
  "client_limit_up": 300000,
  "created_time": 1.23,
  "description": "string_example",
  "dscp": null,
  "failover_policy": "string_example",
  "hostnames": [
    "example.com"
  ],
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "max_jitter": null,
  "max_latency": null,
  "max_loss": null,
  "modified_time": 1.23,
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "service_limit_down": 300000,
  "service_limit_up": 300000,
  "sle_enabled": true,
  "specs": [
    {
      "port_range": "8080,8443",
      "protocol": "tcp"
    }
  ],
  "ssr_relaxed_tcp_state_enforcement": true,
  "traffic_class": "string_example",
  "traffic_type": "string_example",
  "type": "string_example",
  "urls": [
    "string_example"
  ]
});
$resp = $client->orgs services->updateOrgService($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/services/{service_id}`

**Summary:** deleteOrgService

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

