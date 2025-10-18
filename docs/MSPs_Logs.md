# MSPs Logs API

## `GET /api/v1/msps/{msp_id}/logs`

**Summary:** listMspAuditLogs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`site_id`|query|false|`string`|Site id|
|`admin_name`|query|false|`string`|Admin name or email|
|`message`|query|false|`string`|Message|
|`sort`|query|false|`#/components/schemas/list_msp_logs_sort`|Sort order|
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

## `GET /api/v1/msps/{msp_id}/logs/count`

**Summary:** countMspAuditLogs

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/msp_logs_count_distinct`||
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

