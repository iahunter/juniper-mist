# Orgs Logs API

## `GET /api/v1/orgs/{org_id}/logs`

**Summary:** listOrgAuditLogs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`site_id`|query|false|`string`|Site id|
|`admin_name`|query|false|`string`|Admin name or email|
|`message`|query|false|`string`|Message|
|`sort`|query|false|`#/components/schemas/list_org_logs_sort`|Sort order|
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

## `GET /api/v1/orgs/{org_id}/logs/count`

**Summary:** countOrgAuditLogs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_logs_count_distinct`||
|`admin_id`|query|false|`string`||
|`admin_name`|query|false|`string`||
|`site_id`|query|false|`string`||
|`message`|query|false|`string`||
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

