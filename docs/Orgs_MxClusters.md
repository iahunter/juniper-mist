# Orgs MxClusters API

## `GET /api/v1/orgs/{org_id}/mxclusters`

**Summary:** listOrgMxEdgeClusters

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

## `POST /api/v1/orgs/{org_id}/mxclusters`

**Summary:** createOrgMxEdgeCluster

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mist_das": {
    "coa_servers": [
      {
        "disable_event_timestamp_check": true,
        "enabled": true,
        "host": "string_example",
        "port": 123,
        "require_message_authenticator": true,
        "secret": "string_example"
      }
    ],
    "enabled": true
  },
  "mist_nac": {
    "acct_server_port": 123,
    "auth_server_port": 123,
    "client_ips": {},
    "enabled": true,
    "secret": "testing123"
  },
  "modified_time": 1.23,
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "proxy": {
    "url": "https://proxy.corp.com:8080/"
  },
  "radsec": {
    "acct_servers": [
      {
        "host": "string_example",
        "port": 123,
        "secret": "string_example",
        "ssids": [
          "string_example"
        ]
      }
    ],
    "auth_servers": [
      {
        "host": "string_example",
        "inband_status_check": true,
        "inband_status_interval": 123,
        "keywrap_enabled": true,
        "keywrap_format": "string_example",
        "keywrap_kek": "string_example",
        "keywrap_mack": "string_example",
        "port": 123,
        "retry": 123,
        "secret": "string_example",
        "ssids": [
          "string_example"
        ],
        "timeout": 123
      }
    ],
    "enabled": true,
    "match_ssid": true,
    "nas_ip_source": "string_example",
    "proxy_hosts": [
      "string_example"
    ],
    "server_selection": "string_example",
    "src_ip_source": "string_example"
  },
  "radsec_tls": {
    "keypair": "string_example"
  },
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tunterm_ap_subnets": [
    "string_example"
  ],
  "tunterm_dhcpd_config": {
    "enabled": true,
    "servers": [
      "string_example"
    ],
    "type": "string_example"
  },
  "tunterm_extra_routes": {},
  "tunterm_hosts": [
    "string_example"
  ],
  "tunterm_hosts_order": [
    123
  ],
  "tunterm_hosts_selection": "string_example",
  "tunterm_monitoring": [
    [
      {
        "host": "10.2.8.15",
        "port": 80,
        "protocol": "tcp",
        "src_vlan_id": 5,
        "timeout": 300
      }
    ]
  ],
  "tunterm_monitoring_disabled": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Mxcluster;

$model = new Mxcluster({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mist_das": {
    "coa_servers": [
      {
        "disable_event_timestamp_check": true,
        "enabled": true,
        "host": "string_example",
        "port": 123,
        "require_message_authenticator": true,
        "secret": "string_example"
      }
    ],
    "enabled": true
  },
  "mist_nac": {
    "acct_server_port": 123,
    "auth_server_port": 123,
    "client_ips": {},
    "enabled": true,
    "secret": "testing123"
  },
  "modified_time": 1.23,
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "proxy": {
    "url": "https://proxy.corp.com:8080/"
  },
  "radsec": {
    "acct_servers": [
      {
        "host": "string_example",
        "port": 123,
        "secret": "string_example",
        "ssids": [
          "string_example"
        ]
      }
    ],
    "auth_servers": [
      {
        "host": "string_example",
        "inband_status_check": true,
        "inband_status_interval": 123,
        "keywrap_enabled": true,
        "keywrap_format": "string_example",
        "keywrap_kek": "string_example",
        "keywrap_mack": "string_example",
        "port": 123,
        "retry": 123,
        "secret": "string_example",
        "ssids": [
          "string_example"
        ],
        "timeout": 123
      }
    ],
    "enabled": true,
    "match_ssid": true,
    "nas_ip_source": "string_example",
    "proxy_hosts": [
      "string_example"
    ],
    "server_selection": "string_example",
    "src_ip_source": "string_example"
  },
  "radsec_tls": {
    "keypair": "string_example"
  },
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tunterm_ap_subnets": [
    "string_example"
  ],
  "tunterm_dhcpd_config": {
    "enabled": true,
    "servers": [
      "string_example"
    ],
    "type": "string_example"
  },
  "tunterm_extra_routes": {},
  "tunterm_hosts": [
    "string_example"
  ],
  "tunterm_hosts_order": [
    123
  ],
  "tunterm_hosts_selection": "string_example",
  "tunterm_monitoring": [
    [
      {
        "host": "10.2.8.15",
        "port": 80,
        "protocol": "tcp",
        "src_vlan_id": 5,
        "timeout": 300
      }
    ]
  ],
  "tunterm_monitoring_disabled": true
});
$resp = $client->orgs mxclusters->createOrgMxEdgeCluster($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/mxclusters/{mxcluster_id}`

**Summary:** getOrgMxEdgeCluster

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/mxclusters/{mxcluster_id}`

**Summary:** updateOrgMxEdgeCluster

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mist_das": {
    "coa_servers": [
      {
        "disable_event_timestamp_check": true,
        "enabled": true,
        "host": "string_example",
        "port": 123,
        "require_message_authenticator": true,
        "secret": "string_example"
      }
    ],
    "enabled": true
  },
  "mist_nac": {
    "acct_server_port": 123,
    "auth_server_port": 123,
    "client_ips": {},
    "enabled": true,
    "secret": "testing123"
  },
  "modified_time": 1.23,
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "proxy": {
    "url": "https://proxy.corp.com:8080/"
  },
  "radsec": {
    "acct_servers": [
      {
        "host": "string_example",
        "port": 123,
        "secret": "string_example",
        "ssids": [
          "string_example"
        ]
      }
    ],
    "auth_servers": [
      {
        "host": "string_example",
        "inband_status_check": true,
        "inband_status_interval": 123,
        "keywrap_enabled": true,
        "keywrap_format": "string_example",
        "keywrap_kek": "string_example",
        "keywrap_mack": "string_example",
        "port": 123,
        "retry": 123,
        "secret": "string_example",
        "ssids": [
          "string_example"
        ],
        "timeout": 123
      }
    ],
    "enabled": true,
    "match_ssid": true,
    "nas_ip_source": "string_example",
    "proxy_hosts": [
      "string_example"
    ],
    "server_selection": "string_example",
    "src_ip_source": "string_example"
  },
  "radsec_tls": {
    "keypair": "string_example"
  },
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tunterm_ap_subnets": [
    "string_example"
  ],
  "tunterm_dhcpd_config": {
    "enabled": true,
    "servers": [
      "string_example"
    ],
    "type": "string_example"
  },
  "tunterm_extra_routes": {},
  "tunterm_hosts": [
    "string_example"
  ],
  "tunterm_hosts_order": [
    123
  ],
  "tunterm_hosts_selection": "string_example",
  "tunterm_monitoring": [
    [
      {
        "host": "10.2.8.15",
        "port": 80,
        "protocol": "tcp",
        "src_vlan_id": 5,
        "timeout": 300
      }
    ]
  ],
  "tunterm_monitoring_disabled": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Mxcluster;

$model = new Mxcluster({
  "created_time": 1.23,
  "for_site": true,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "mist_das": {
    "coa_servers": [
      {
        "disable_event_timestamp_check": true,
        "enabled": true,
        "host": "string_example",
        "port": 123,
        "require_message_authenticator": true,
        "secret": "string_example"
      }
    ],
    "enabled": true
  },
  "mist_nac": {
    "acct_server_port": 123,
    "auth_server_port": 123,
    "client_ips": {},
    "enabled": true,
    "secret": "testing123"
  },
  "modified_time": 1.23,
  "mxedge_mgmt": {
    "config_auto_revert": true,
    "fips_enabled": true,
    "mist_password": "MIST_PASSWORD",
    "oob_ip_type": "string_example",
    "oob_ip_type6": "string_example",
    "root_password": "ROOT_PASSWORD"
  },
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "proxy": {
    "url": "https://proxy.corp.com:8080/"
  },
  "radsec": {
    "acct_servers": [
      {
        "host": "string_example",
        "port": 123,
        "secret": "string_example",
        "ssids": [
          "string_example"
        ]
      }
    ],
    "auth_servers": [
      {
        "host": "string_example",
        "inband_status_check": true,
        "inband_status_interval": 123,
        "keywrap_enabled": true,
        "keywrap_format": "string_example",
        "keywrap_kek": "string_example",
        "keywrap_mack": "string_example",
        "port": 123,
        "retry": 123,
        "secret": "string_example",
        "ssids": [
          "string_example"
        ],
        "timeout": 123
      }
    ],
    "enabled": true,
    "match_ssid": true,
    "nas_ip_source": "string_example",
    "proxy_hosts": [
      "string_example"
    ],
    "server_selection": "string_example",
    "src_ip_source": "string_example"
  },
  "radsec_tls": {
    "keypair": "string_example"
  },
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "tunterm_ap_subnets": [
    "string_example"
  ],
  "tunterm_dhcpd_config": {
    "enabled": true,
    "servers": [
      "string_example"
    ],
    "type": "string_example"
  },
  "tunterm_extra_routes": {},
  "tunterm_hosts": [
    "string_example"
  ],
  "tunterm_hosts_order": [
    123
  ],
  "tunterm_hosts_selection": "string_example",
  "tunterm_monitoring": [
    [
      {
        "host": "10.2.8.15",
        "port": 80,
        "protocol": "tcp",
        "src_vlan_id": 5,
        "timeout": 300
      }
    ]
  ],
  "tunterm_monitoring_disabled": true
});
$resp = $client->orgs mxclusters->updateOrgMxEdgeCluster($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/mxclusters/{mxcluster_id}`

**Summary:** deleteOrgMxEdgeCluster

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

