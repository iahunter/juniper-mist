# Orgs Marvis API

## `GET /api/v1/orgs/{org_id}/troubleshoot`

**Summary:** troubleshootOrg

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mac`|query|false|`string`|**required** when troubleshooting device or a client|
|`site_id`|query|false|`string`|**required** when troubleshooting site|
|`None`|None|false|``||
|`None`|None|false|``||
|`type`|query|false|`#/components/schemas/troubleshoot_type`|When troubleshooting site, type of network to troubleshoot|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

