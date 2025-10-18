# Orgs AP Templates API

## `GET /api/v1/orgs/{org_id}/aptemplates`

**Summary:** listOrgAptemplates

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

## `POST /api/v1/orgs/{org_id}/aptemplates`

**Summary:** createOrgAptemplate

**Request (raw array example)**

```json
{
  "ap_matching": {
    "enabled": true,
    "rules": [
      {
        "match_model": "string_example",
        "name": "string_example",
        "port_config": {}
      }
    ]
  },
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "wifi": {
    "cisco_enabled": true,
    "disable_11k": true,
    "disable_radios_when_power_constrained": true,
    "enable_arp_spoof": true,
    "enable_shared_radio_scanning": true,
    "enabled": true,
    "locate_connected": true,
    "locate_unconnected": true,
    "mesh_allow_dfs": true,
    "mesh_enable_crm": true,
    "mesh_enabled": true,
    "proxy_arp": true
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ApTemplate;

$model = new ApTemplate({
  "ap_matching": {
    "enabled": true,
    "rules": [
      {
        "match_model": "string_example",
        "name": "string_example",
        "port_config": {}
      }
    ]
  },
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "wifi": {
    "cisco_enabled": true,
    "disable_11k": true,
    "disable_radios_when_power_constrained": true,
    "enable_arp_spoof": true,
    "enable_shared_radio_scanning": true,
    "enabled": true,
    "locate_connected": true,
    "locate_unconnected": true,
    "mesh_allow_dfs": true,
    "mesh_enable_crm": true,
    "mesh_enabled": true,
    "proxy_arp": true
  }
});
$resp = $client->orgs ap templates->createOrgAptemplate($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/aptemplates/{aptemplate_id}`

**Summary:** getOrgAptemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/aptemplates/{aptemplate_id}`

**Summary:** updateOrgAptemplate

**Request (raw array example)**

```json
{
  "ap_matching": {
    "enabled": true,
    "rules": [
      {
        "match_model": "string_example",
        "name": "string_example",
        "port_config": {}
      }
    ]
  },
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "wifi": {
    "cisco_enabled": true,
    "disable_11k": true,
    "disable_radios_when_power_constrained": true,
    "enable_arp_spoof": true,
    "enable_shared_radio_scanning": true,
    "enabled": true,
    "locate_connected": true,
    "locate_unconnected": true,
    "mesh_allow_dfs": true,
    "mesh_enable_crm": true,
    "mesh_enabled": true,
    "proxy_arp": true
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ApTemplate;

$model = new ApTemplate({
  "ap_matching": {
    "enabled": true,
    "rules": [
      {
        "match_model": "string_example",
        "name": "string_example",
        "port_config": {}
      }
    ]
  },
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "wifi": {
    "cisco_enabled": true,
    "disable_11k": true,
    "disable_radios_when_power_constrained": true,
    "enable_arp_spoof": true,
    "enable_shared_radio_scanning": true,
    "enabled": true,
    "locate_connected": true,
    "locate_unconnected": true,
    "mesh_allow_dfs": true,
    "mesh_enable_crm": true,
    "mesh_enabled": true,
    "proxy_arp": true
  }
});
$resp = $client->orgs ap templates->updateOrgAptemplate($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/aptemplates/{aptemplate_id}`

**Summary:** deleteOrgAptemplate

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

