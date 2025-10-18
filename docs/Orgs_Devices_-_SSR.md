# Orgs Devices - SSR API

## `GET /api/v1/orgs/{org_id}/128routers/register_cmd`

**Summary:** getOrg128TRegistrationCommands

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`ttl`|query|false|`integer`|duration for the token to stay valid,in seconds. Defaults to 1 year (31536000 seconds) if not specified.|
|`asset_ids`|query|false|`#/components/schemas/strings`|When specified, only specified assets are allowed for registration. This parameter can and is preferred to be set in HTTP body, especially when the list is long, so that HTTP header size will never exceed limit.|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

