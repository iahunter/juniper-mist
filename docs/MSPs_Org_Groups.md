# MSPs Org Groups API

## `GET /api/v1/msps/{msp_id}/orggroups`

**Summary:** listMspOrgGroups

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/msps/{msp_id}/orggroups`

**Summary:** createMspOrgGroup

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "name": "string_example",
  "org_ids": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Orggroup;

$model = new Orggroup({
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "name": "string_example",
  "org_ids": [
    "string_example"
  ]
});
$resp = $client->msps org groups->createMspOrgGroup($model->toArray());
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

## `GET /api/v1/msps/{msp_id}/orggroups/{orggroup_id}`

**Summary:** getMspOrgGroup

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/msps/{msp_id}/orggroups/{orggroup_id}`

**Summary:** updateMspOrgGroup

**Request (raw array example)**

```json
{
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "name": "string_example",
  "org_ids": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Orggroup;

$model = new Orggroup({
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "name": "string_example",
  "org_ids": [
    "string_example"
  ]
});
$resp = $client->msps org groups->updateMspOrgGroup($model->toArray());
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

## `DELETE /api/v1/msps/{msp_id}/orggroups/{orggroup_id}`

**Summary:** deleteMspOrgGroup

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

