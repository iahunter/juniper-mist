# Orgs Webhooks API

## `GET /api/v1/orgs/{org_id}/webhooks`

**Summary:** listOrgWebhooks

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

## `POST /api/v1/orgs/{org_id}/webhooks`

**Summary:** createOrgWebhook

**Request (raw array example)**

```json
{
  "assetfilter_ids": [
    "string_example"
  ],
  "created_time": 1.23,
  "enabled": true,
  "for_site": true,
  "headers": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "oauth2_client_id": "string_example",
  "oauth2_client_secret": "string_example",
  "oauth2_grant_type": "string_example",
  "oauth2_password": "string_example",
  "oauth2_scopes": [
    "string_example"
  ],
  "oauth2_token_url": "string_example",
  "oauth2_username": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "secret": "string_example",
  "single_event_per_message": true,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "splunk_token": "string_example",
  "topics": [
    "string_example"
  ],
  "type": "string_example",
  "url": "string_example",
  "verify_cert": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Webhook;

$model = new Webhook({
  "assetfilter_ids": [
    "string_example"
  ],
  "created_time": 1.23,
  "enabled": true,
  "for_site": true,
  "headers": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "oauth2_client_id": "string_example",
  "oauth2_client_secret": "string_example",
  "oauth2_grant_type": "string_example",
  "oauth2_password": "string_example",
  "oauth2_scopes": [
    "string_example"
  ],
  "oauth2_token_url": "string_example",
  "oauth2_username": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "secret": "string_example",
  "single_event_per_message": true,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "splunk_token": "string_example",
  "topics": [
    "string_example"
  ],
  "type": "string_example",
  "url": "string_example",
  "verify_cert": true
});
$resp = $client->orgs webhooks->createOrgWebhook($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/webhooks/{webhook_id}`

**Summary:** getOrgWebhook

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/webhooks/{webhook_id}`

**Summary:** updateOrgWebhook

**Request (raw array example)**

```json
{
  "assetfilter_ids": [
    "string_example"
  ],
  "created_time": 1.23,
  "enabled": true,
  "for_site": true,
  "headers": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "oauth2_client_id": "string_example",
  "oauth2_client_secret": "string_example",
  "oauth2_grant_type": "string_example",
  "oauth2_password": "string_example",
  "oauth2_scopes": [
    "string_example"
  ],
  "oauth2_token_url": "string_example",
  "oauth2_username": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "secret": "string_example",
  "single_event_per_message": true,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "splunk_token": "string_example",
  "topics": [
    "string_example"
  ],
  "type": "string_example",
  "url": "string_example",
  "verify_cert": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Webhook;

$model = new Webhook({
  "assetfilter_ids": [
    "string_example"
  ],
  "created_time": 1.23,
  "enabled": true,
  "for_site": true,
  "headers": {},
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "modified_time": 1.23,
  "name": "string_example",
  "oauth2_client_id": "string_example",
  "oauth2_client_secret": "string_example",
  "oauth2_grant_type": "string_example",
  "oauth2_password": "string_example",
  "oauth2_scopes": [
    "string_example"
  ],
  "oauth2_token_url": "string_example",
  "oauth2_username": "string_example",
  "org_id": "a97c1b22-a4e9-411e-9bfd-d8695a0f9e61",
  "secret": "string_example",
  "single_event_per_message": true,
  "site_id": "441a1214-6928-442a-8e92-e1d34b8ec6a6",
  "splunk_token": "string_example",
  "topics": [
    "string_example"
  ],
  "type": "string_example",
  "url": "string_example",
  "verify_cert": true
});
$resp = $client->orgs webhooks->updateOrgWebhook($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/webhooks/{webhook_id}`

**Summary:** deleteOrgWebhook

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/webhooks/{webhook_id}/events/count`

**Summary:** countOrgWebhooksDeliveries

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`error`|query|false|`string`||
|`status_code`|query|false|`integer`||
|`status`|query|false|`#/components/schemas/webhook_delivery_status`|Webhook delivery status|
|`topic`|query|false|`#/components/schemas/webhook_delivery_topic`|Webhook topic|
|`distinct`|query|false|`#/components/schemas/webhook_delivery_distinct`||
|`None`|None|false|``||
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

## `GET /api/v1/orgs/{org_id}/webhooks/{webhook_id}/events/search`

**Summary:** searchOrgWebhooksDeliveries

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`error`|query|false|`string`||
|`status_code`|query|false|`integer`||
|`status`|query|false|`#/components/schemas/webhook_delivery_status`|Webhook delivery status|
|`topic`|query|false|`#/components/schemas/webhook_delivery_topic`|Webhook topic|
|`None`|None|false|``||
|`None`|None|false|``||
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

## `POST /api/v1/orgs/{org_id}/webhooks/{webhook_id}/ping`

**Summary:** pingOrgWebhook

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

