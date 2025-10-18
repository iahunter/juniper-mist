# MSPs Admins API

## `GET /api/v1/msps/{msp_id}/admins`

**Summary:** listMspAdmins

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/msps/{msp_id}/admins/{admin_id}`

**Summary:** getMspAdmin

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/msps/{msp_id}/admins/{admin_id}`

**Summary:** updateMspAdmin

**Request (raw array example)**

```json
{
  "admin_id": "456b7016-a916-a4b1-78dd-72b947c152b7",
  "compliance_status": "string_example",
  "email": "jsnow@abc.com",
  "enable_two_factor": true,
  "expire_time": 123,
  "first_name": "John",
  "hours": 123,
  "last_name": "Sno",
  "name": "string_example",
  "no_tracking": true,
  "oauth_google": true,
  "password_modified_time": 1.23,
  "phone": "string_example",
  "phone2": "string_example",
  "privileges": [
    {
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "msp_logo_url": "string_example",
      "msp_name": "string_example",
      "msp_url": "string_example",
      "name": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "org_name": "string_example",
      "orggroup_ids": [
        "832b1d74-9531-409b-ae37-4d7f3edbde92"
      ],
      "role": "string_example",
      "scope": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sitegroup_ids": [
        "3c708be3-9422-4695-b729-babdbd2f7615"
      ],
      "views": [
        "string_example"
      ]
    }
  ],
  "session_expiry": 1440,
  "tags": [
    "string_example"
  ],
  "two_factor_verified": true,
  "via_sso": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Admin;

$model = new Admin({
  "admin_id": "456b7016-a916-a4b1-78dd-72b947c152b7",
  "compliance_status": "string_example",
  "email": "jsnow@abc.com",
  "enable_two_factor": true,
  "expire_time": 123,
  "first_name": "John",
  "hours": 123,
  "last_name": "Sno",
  "name": "string_example",
  "no_tracking": true,
  "oauth_google": true,
  "password_modified_time": 1.23,
  "phone": "string_example",
  "phone2": "string_example",
  "privileges": [
    {
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "msp_logo_url": "string_example",
      "msp_name": "string_example",
      "msp_url": "string_example",
      "name": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "org_name": "string_example",
      "orggroup_ids": [
        "832b1d74-9531-409b-ae37-4d7f3edbde92"
      ],
      "role": "string_example",
      "scope": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sitegroup_ids": [
        "3c708be3-9422-4695-b729-babdbd2f7615"
      ],
      "views": [
        "string_example"
      ]
    }
  ],
  "session_expiry": 1440,
  "tags": [
    "string_example"
  ],
  "two_factor_verified": true,
  "via_sso": true
});
$resp = $client->msps admins->updateMspAdmin($model->toArray());
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

## `DELETE /api/v1/msps/{msp_id}/admins/{admin_id}`

**Summary:** revokeMspAdmin

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/msps/{msp_id}/invites`

**Summary:** inviteMspAdmin

**Request (raw array example)**

```json
{
  "admin_id": "456b7016-a916-a4b1-78dd-72b947c152b7",
  "compliance_status": "string_example",
  "email": "jsnow@abc.com",
  "enable_two_factor": true,
  "expire_time": 123,
  "first_name": "John",
  "hours": 123,
  "last_name": "Sno",
  "name": "string_example",
  "no_tracking": true,
  "oauth_google": true,
  "password_modified_time": 1.23,
  "phone": "string_example",
  "phone2": "string_example",
  "privileges": [
    {
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "msp_logo_url": "string_example",
      "msp_name": "string_example",
      "msp_url": "string_example",
      "name": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "org_name": "string_example",
      "orggroup_ids": [
        "832b1d74-9531-409b-ae37-4d7f3edbde92"
      ],
      "role": "string_example",
      "scope": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sitegroup_ids": [
        "3c708be3-9422-4695-b729-babdbd2f7615"
      ],
      "views": [
        "string_example"
      ]
    }
  ],
  "session_expiry": 1440,
  "tags": [
    "string_example"
  ],
  "two_factor_verified": true,
  "via_sso": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Admin;

$model = new Admin({
  "admin_id": "456b7016-a916-a4b1-78dd-72b947c152b7",
  "compliance_status": "string_example",
  "email": "jsnow@abc.com",
  "enable_two_factor": true,
  "expire_time": 123,
  "first_name": "John",
  "hours": 123,
  "last_name": "Sno",
  "name": "string_example",
  "no_tracking": true,
  "oauth_google": true,
  "password_modified_time": 1.23,
  "phone": "string_example",
  "phone2": "string_example",
  "privileges": [
    {
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "msp_logo_url": "string_example",
      "msp_name": "string_example",
      "msp_url": "string_example",
      "name": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "org_name": "string_example",
      "orggroup_ids": [
        "832b1d74-9531-409b-ae37-4d7f3edbde92"
      ],
      "role": "string_example",
      "scope": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sitegroup_ids": [
        "3c708be3-9422-4695-b729-babdbd2f7615"
      ],
      "views": [
        "string_example"
      ]
    }
  ],
  "session_expiry": 1440,
  "tags": [
    "string_example"
  ],
  "two_factor_verified": true,
  "via_sso": true
});
$resp = $client->msps admins->inviteMspAdmin($model->toArray());
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

## `PUT /api/v1/msps/{msp_id}/invites/{invite_id}`

**Summary:** updateMspAdminInvite

**Request (raw array example)**

```json
{
  "admin_id": "456b7016-a916-a4b1-78dd-72b947c152b7",
  "compliance_status": "string_example",
  "email": "jsnow@abc.com",
  "enable_two_factor": true,
  "expire_time": 123,
  "first_name": "John",
  "hours": 123,
  "last_name": "Sno",
  "name": "string_example",
  "no_tracking": true,
  "oauth_google": true,
  "password_modified_time": 1.23,
  "phone": "string_example",
  "phone2": "string_example",
  "privileges": [
    {
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "msp_logo_url": "string_example",
      "msp_name": "string_example",
      "msp_url": "string_example",
      "name": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "org_name": "string_example",
      "orggroup_ids": [
        "832b1d74-9531-409b-ae37-4d7f3edbde92"
      ],
      "role": "string_example",
      "scope": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sitegroup_ids": [
        "3c708be3-9422-4695-b729-babdbd2f7615"
      ],
      "views": [
        "string_example"
      ]
    }
  ],
  "session_expiry": 1440,
  "tags": [
    "string_example"
  ],
  "two_factor_verified": true,
  "via_sso": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Admin;

$model = new Admin({
  "admin_id": "456b7016-a916-a4b1-78dd-72b947c152b7",
  "compliance_status": "string_example",
  "email": "jsnow@abc.com",
  "enable_two_factor": true,
  "expire_time": 123,
  "first_name": "John",
  "hours": 123,
  "last_name": "Sno",
  "name": "string_example",
  "no_tracking": true,
  "oauth_google": true,
  "password_modified_time": 1.23,
  "phone": "string_example",
  "phone2": "string_example",
  "privileges": [
    {
      "msp_id": "b9d42c2e-88ee-41f8-b798-f009ce7fe909",
      "msp_logo_url": "string_example",
      "msp_name": "string_example",
      "msp_url": "string_example",
      "name": "string_example",
      "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
      "org_name": "string_example",
      "orggroup_ids": [
        "832b1d74-9531-409b-ae37-4d7f3edbde92"
      ],
      "role": "string_example",
      "scope": "string_example",
      "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
      "sitegroup_ids": [
        "3c708be3-9422-4695-b729-babdbd2f7615"
      ],
      "views": [
        "string_example"
      ]
    }
  ],
  "session_expiry": 1440,
  "tags": [
    "string_example"
  ],
  "two_factor_verified": true,
  "via_sso": true
});
$resp = $client->msps admins->updateMspAdminInvite($model->toArray());
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

## `DELETE /api/v1/msps/{msp_id}/invites/{invite_id}`

**Summary:** uninviteMspAdmin

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

