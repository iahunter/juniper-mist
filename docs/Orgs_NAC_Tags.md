# Orgs NAC Tags API

## `GET /api/v1/orgs/{org_id}/nactags`

**Summary:** listOrgNacTags

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/nac_tag_type`|Type of NAC Tag. enum: `egress_vlan_names`, `gbp_tag`, `match`, `radius_attrs`, `radius_group`, `radius_vendor_attrs`, `session_timeout`, `username_attr`, `vlan`|
|`name`|query|false|`string`|Name of NAC Tag|
|`match`|query|false|`#/components/schemas/nac_tag_match`|if `type`==`match`, Type of NAC Tag. enum: `cert_cn`, `cert_eku`, `cert_issuer`, `cert_san`, `cert_serial`, `cert_sub`, `cert_template`, `client_mac`, `edr_health`, `idp_role`, `ingress_vlan`, `mdm_status`, `nas_ip`, `radius_group`, `realm`, `ssid`, `user_name`, `usermac_label`|
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

## `POST /api/v1/orgs/{org_id}/nactags`

**Summary:** createOrgNacTag

**Request (raw array example)**

```json
{
  "allow_usermac_override": true,
  "created_time": 1.23,
  "egress_vlan_names": [
    "string_example"
  ],
  "gbp_tag": null,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "match": "string_example",
  "match_all": true,
  "modified_time": 1.23,
  "nacportal_id": "1e970fec-0a7a-4d73-a472-3ef3b6a456aa",
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "radius_attrs": [
    "string_example"
  ],
  "radius_group": "string_example",
  "radius_vendor_attrs": [
    "string_example"
  ],
  "session_timeout": 86000,
  "type": "string_example",
  "username_attr": "string_example",
  "values": [
    "string_example"
  ],
  "vlan": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NacTag;

$model = new NacTag({
  "allow_usermac_override": true,
  "created_time": 1.23,
  "egress_vlan_names": [
    "string_example"
  ],
  "gbp_tag": null,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "match": "string_example",
  "match_all": true,
  "modified_time": 1.23,
  "nacportal_id": "1e970fec-0a7a-4d73-a472-3ef3b6a456aa",
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "radius_attrs": [
    "string_example"
  ],
  "radius_group": "string_example",
  "radius_vendor_attrs": [
    "string_example"
  ],
  "session_timeout": 86000,
  "type": "string_example",
  "username_attr": "string_example",
  "values": [
    "string_example"
  ],
  "vlan": "string_example"
});
$resp = $client->orgs nac tags->createOrgNacTag($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/nactags/{nactag_id}`

**Summary:** getOrgNacTag

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/nactags/{nactag_id}`

**Summary:** updateOrgNacTag

**Request (raw array example)**

```json
{
  "allow_usermac_override": true,
  "created_time": 1.23,
  "egress_vlan_names": [
    "string_example"
  ],
  "gbp_tag": null,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "match": "string_example",
  "match_all": true,
  "modified_time": 1.23,
  "nacportal_id": "1e970fec-0a7a-4d73-a472-3ef3b6a456aa",
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "radius_attrs": [
    "string_example"
  ],
  "radius_group": "string_example",
  "radius_vendor_attrs": [
    "string_example"
  ],
  "session_timeout": 86000,
  "type": "string_example",
  "username_attr": "string_example",
  "values": [
    "string_example"
  ],
  "vlan": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NacTag;

$model = new NacTag({
  "allow_usermac_override": true,
  "created_time": 1.23,
  "egress_vlan_names": [
    "string_example"
  ],
  "gbp_tag": null,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "match": "string_example",
  "match_all": true,
  "modified_time": 1.23,
  "nacportal_id": "1e970fec-0a7a-4d73-a472-3ef3b6a456aa",
  "name": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "radius_attrs": [
    "string_example"
  ],
  "radius_group": "string_example",
  "radius_vendor_attrs": [
    "string_example"
  ],
  "session_timeout": 86000,
  "type": "string_example",
  "username_attr": "string_example",
  "values": [
    "string_example"
  ],
  "vlan": "string_example"
});
$resp = $client->orgs nac tags->updateOrgNacTag($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/nactags/{nactag_id}`

**Summary:** deleteOrgNacTag

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

