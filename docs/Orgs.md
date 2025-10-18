# Orgs API

## `POST /api/v1/orgs`

**Summary:** createOrg

**Request (raw array example)**

```json
{
  "alarmtemplate_id": "string_example",
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "msp_logo_url": "https://example.com/logo/b9d42c2e-88ee-41f8-b798-f009ce7fe909.jpeg",
  "msp_name": "MSP",
  "name": "Org",
  "orggroup_ids": [
    "string_example"
  ],
  "session_expiry": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Org;

$model = new Org({
  "alarmtemplate_id": "string_example",
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "msp_logo_url": "https://example.com/logo/b9d42c2e-88ee-41f8-b798-f009ce7fe909.jpeg",
  "msp_name": "MSP",
  "name": "Org",
  "orggroup_ids": [
    "string_example"
  ],
  "session_expiry": 123
});
$resp = $client->orgs->createOrg($model->toArray());
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

## `GET /api/v1/orgs/{org_id}`

**Summary:** getOrg

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}`

**Summary:** updateOrg

**Request (raw array example)**

```json
{
  "alarmtemplate_id": "string_example",
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "msp_logo_url": "https://example.com/logo/b9d42c2e-88ee-41f8-b798-f009ce7fe909.jpeg",
  "msp_name": "MSP",
  "name": "Org",
  "orggroup_ids": [
    "string_example"
  ],
  "session_expiry": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Org;

$model = new Org({
  "alarmtemplate_id": "string_example",
  "allow_mist": true,
  "created_time": 1.23,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
  "msp_logo_url": "https://example.com/logo/b9d42c2e-88ee-41f8-b798-f009ce7fe909.jpeg",
  "msp_name": "MSP",
  "name": "Org",
  "orggroup_ids": [
    "string_example"
  ],
  "session_expiry": 123
});
$resp = $client->orgs->updateOrg($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}`

**Summary:** deleteOrg

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/clone`

**Summary:** cloneOrg

**Request (raw array example)**

```json
{
  "name": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\NameString;

$model = new NameString({
  "name": "string_example"
});
$resp = $client->orgs->cloneOrg($model->toArray());
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

