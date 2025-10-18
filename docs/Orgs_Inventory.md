# Orgs Inventory API

## `GET /api/v1/orgs/{org_id}/inventory`

**Summary:** getOrgInventory

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`serial`|query|false|`string`|Device serial|
|`model`|query|false|`string`|Device model|
|`type`|query|false|`#/components/schemas/device_type`||
|`mac`|query|false|`string`|MAC address|
|`site_id`|query|false|`string`|Site id if assigned, null if not assigned|
|`vc_mac`|query|false|`string`|Virtual Chassis MAC Address|
|`vc`|query|false|`boolean`|To display Virtual Chassis members|
|`unassigned`|query|false|`boolean`|To display Unassigned devices|
|`modified_after`|query|false|`integer`|Filter on inventory last modified time, in epoch|
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

## `POST /api/v1/orgs/{org_id}/inventory`

**Summary:** addOrgInventory

**Request (raw array example)**

```json
[
  "string_example"
]
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ClaimCodes;

$model = new ClaimCodes([
  "string_example"
]);
$resp = $client->orgs inventory->addOrgInventory($model->toArray());
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

## `PUT /api/v1/orgs/{org_id}/inventory`

**Summary:** updateOrgInventoryAssignment

**Request (raw array example)**

```json
{
  "disable_auto_config": true,
  "macs": [
    "string_example"
  ],
  "managed": true,
  "no_reassign": true,
  "op": "string_example",
  "serials": [
    "string_example"
  ],
  "site_id": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\InventoryUpdate;

$model = new InventoryUpdate({
  "disable_auto_config": true,
  "macs": [
    "string_example"
  ],
  "managed": true,
  "no_reassign": true,
  "op": "string_example",
  "serials": [
    "string_example"
  ],
  "site_id": "string_example"
});
$resp = $client->orgs inventory->updateOrgInventoryAssignment($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/inventory/count`

**Summary:** countOrgInventory

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_default_ap`||
|`distinct`|query|false|`#/components/schemas/inventory_count_distinct`||
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/inventory/create_ha_cluster`

**Summary:** createOrgGatewayHaCluster

**Request (raw array example)**

```json
{
  "disable_auto_config": true,
  "managed": true,
  "nodes": [
    {
      "mac": "aff827549235"
    }
  ],
  "site_id": "43e9c864-a7e4-4310-8031-d9817d2c5a43"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\HaClusterConfig;

$model = new HaClusterConfig({
  "disable_auto_config": true,
  "managed": true,
  "nodes": [
    {
      "mac": "aff827549235"
    }
  ],
  "site_id": "43e9c864-a7e4-4310-8031-d9817d2c5a43"
});
$resp = $client->orgs inventory->createOrgGatewayHaCluster($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/inventory/delete_ha_cluster`

**Summary:** deleteOrgGatewayHaCluster

**Request (raw array example)**

```json
{
  "mac": "aff827549235"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\HaClusterDelete;

$model = new HaClusterDelete({
  "mac": "aff827549235"
});
$resp = $client->orgs inventory->deleteOrgGatewayHaCluster($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/inventory/reevaluate_auto_assignment`

**Summary:** reevaluateOrgAutoAssignment

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/inventory/replace`

**Summary:** replaceOrgDevices

**Request (raw array example)**

```json
{
  "discard": [
    "string_example"
  ],
  "inventory_mac": "5c5b35000301",
  "mac": "5c5b35000101",
  "site_id": "4ac1dcf4-9d8b-7211-65c4-057819f0862b",
  "tunterm_port_config": {
    "downstream_ports": [
      "string_example"
    ],
    "separate_upstream_downstream": true,
    "upstream_port_vlan_id": 30,
    "upstream_ports": [
      "string_example"
    ]
  }
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\ReplaceDevice;

$model = new ReplaceDevice({
  "discard": [
    "string_example"
  ],
  "inventory_mac": "5c5b35000301",
  "mac": "5c5b35000101",
  "site_id": "4ac1dcf4-9d8b-7211-65c4-057819f0862b",
  "tunterm_port_config": {
    "downstream_ports": [
      "string_example"
    ],
    "separate_upstream_downstream": true,
    "upstream_port_vlan_id": 30,
    "upstream_ports": [
      "string_example"
    ]
  }
});
$resp = $client->orgs inventory->replaceOrgDevices($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/inventory/search`

**Summary:** searchOrgInventory

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`type`|query|false|`#/components/schemas/device_type_default_ap`||
|`mac`|query|false|`string`|MAC address|
|`vc_mac`|query|false|`string`|Virtual Chassis MAC Address|
|`master_mac`|query|false|`string`|Master device mac for virtual mac cluster|
|`site_id`|query|false|`string`|Site id if assigned, null if not assigned|
|`serial`|query|false|`string`|Device serial|
|`master`|query|false|`string`|true / false|
|`sku`|query|false|`string`|Device sku|
|`version`|query|false|`string`|Device version|
|`status`|query|false|`string`|Device status|
|`text`|query|false|`string`|Wildcards for name, mac, serial|
|`None`|None|false|``||
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

