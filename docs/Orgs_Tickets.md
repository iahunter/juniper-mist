# Orgs Tickets API

## `GET /api/v1/orgs/{org_id}/tickets`

**Summary:** listOrgTickets

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `POST /api/v1/orgs/{org_id}/tickets`

**Summary:** createOrgTicket

**Request (raw array example)**

```json
{
  "case_number": "string_example",
  "comments": [
    {
      "attachment_ids": [
        "00000000-0000-0000-0000-15231a659c13"
      ],
      "attachments": [
        {
          "content_type": "image/png",
          "content_url": "https://api.mist.com/api/v1/forward/download?jwt=...",
          "created_at": 1453908369,
          "file_name": "crash.png",
          "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
          "size_in_bytes": 1943
        }
      ],
      "author": "string_example",
      "comment": "string_example",
      "created_at": 123
    }
  ],
  "created_at": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "requester": "string_example",
  "requester_email": "string_example",
  "status": "string_example",
  "subject": "string_example",
  "type": "string_example",
  "updated_at": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Ticket;

$model = new Ticket({
  "case_number": "string_example",
  "comments": [
    {
      "attachment_ids": [
        "00000000-0000-0000-0000-15231a659c13"
      ],
      "attachments": [
        {
          "content_type": "image/png",
          "content_url": "https://api.mist.com/api/v1/forward/download?jwt=...",
          "created_at": 1453908369,
          "file_name": "crash.png",
          "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
          "size_in_bytes": 1943
        }
      ],
      "author": "string_example",
      "comment": "string_example",
      "created_at": 123
    }
  ],
  "created_at": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "requester": "string_example",
  "requester_email": "string_example",
  "status": "string_example",
  "subject": "string_example",
  "type": "string_example",
  "updated_at": 123
});
$resp = $client->orgs tickets->createOrgTicket($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/tickets/count`

**Summary:** countOrgTickets

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_tickets_count_distinct`||
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/tickets/{ticket_id}`

**Summary:** getOrgTicket

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `PUT /api/v1/orgs/{org_id}/tickets/{ticket_id}`

**Summary:** updateOrgTicket

**Request (raw array example)**

```json
{
  "case_number": "string_example",
  "comments": [
    {
      "attachment_ids": [
        "00000000-0000-0000-0000-15231a659c13"
      ],
      "attachments": [
        {
          "content_type": "image/png",
          "content_url": "https://api.mist.com/api/v1/forward/download?jwt=...",
          "created_at": 1453908369,
          "file_name": "crash.png",
          "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
          "size_in_bytes": 1943
        }
      ],
      "author": "string_example",
      "comment": "string_example",
      "created_at": 123
    }
  ],
  "created_at": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "requester": "string_example",
  "requester_email": "string_example",
  "status": "string_example",
  "subject": "string_example",
  "type": "string_example",
  "updated_at": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Ticket;

$model = new Ticket({
  "case_number": "string_example",
  "comments": [
    {
      "attachment_ids": [
        "00000000-0000-0000-0000-15231a659c13"
      ],
      "attachments": [
        {
          "content_type": "image/png",
          "content_url": "https://api.mist.com/api/v1/forward/download?jwt=...",
          "created_at": 1453908369,
          "file_name": "crash.png",
          "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
          "size_in_bytes": 1943
        }
      ],
      "author": "string_example",
      "comment": "string_example",
      "created_at": 123
    }
  ],
  "created_at": 123,
  "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
  "requester": "string_example",
  "requester_email": "string_example",
  "status": "string_example",
  "subject": "string_example",
  "type": "string_example",
  "updated_at": 123
});
$resp = $client->orgs tickets->updateOrgTicket($model->toArray());
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

## `POST /api/v1/orgs/{org_id}/tickets/{ticket_id}/attachments`

**Summary:** UploadOrgTicketAttachment

**Request (raw array example)**

```json
{
  "file": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\TicketUploadAttachmentsFile;

$model = new TicketUploadAttachmentsFile({
  "file": "string_example"
});
$resp = $client->orgs tickets->UploadOrgTicketAttachment($model->toArray());
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

## `GET /api/v1/orgs/{org_id}/tickets/{ticket_id}/attachments/{attachment_id}`

**Summary:** GetOrgTicketAttachment

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
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

## `POST /api/v1/orgs/{org_id}/tickets/{ticket_id}/comments`

**Summary:** addOrgTicketComment

**Request (raw array example)**

```json
{
  "attachment_ids": [
    "00000000-0000-0000-0000-15231a659c13"
  ],
  "attachments": [
    {
      "content_type": "image/png",
      "content_url": "https://api.mist.com/api/v1/forward/download?jwt=...",
      "created_at": 1453908369,
      "file_name": "crash.png",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "size_in_bytes": 1943
    }
  ],
  "author": "string_example",
  "comment": "string_example",
  "created_at": 123
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\TicketComment;

$model = new TicketComment({
  "attachment_ids": [
    "00000000-0000-0000-0000-15231a659c13"
  ],
  "attachments": [
    {
      "content_type": "image/png",
      "content_url": "https://api.mist.com/api/v1/forward/download?jwt=...",
      "created_at": 1453908369,
      "file_name": "crash.png",
      "id": "53f10664-3ce8-4c27-b382-0ef66432349f",
      "size_in_bytes": 1943
    }
  ],
  "author": "string_example",
  "comment": "string_example",
  "created_at": 123
});
$resp = $client->orgs tickets->addOrgTicketComment($model->toArray());
print_r($resp);
```

**Request (raw array example)**

```json
{
  "comment": "this is urgent",
  "file": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\TicketCommentImportFile;

$model = new TicketCommentImportFile({
  "comment": "this is urgent",
  "file": "string_example"
});
$resp = $client->orgs tickets->addOrgTicketComment($model->toArray());
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

