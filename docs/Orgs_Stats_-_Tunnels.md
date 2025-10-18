# Orgs Stats - Tunnels API

## `GET /api/v1/orgs/{org_id}/stats/tunnels/count`

**Summary:** countOrgTunnelsStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`distinct`|query|false|`#/components/schemas/org_tunnel_count_distinct`|- If `type`==`wxtunnel`: wxtunnel_id / ap / remote_ip / remote_port / state / mxedge_id / mxcluster_id / site_id / peer_mxedge_id; default is wxtunnel_id 
- If `type`==`wan`: mac / site_id / node / peer_ip / peer_host/ ip / tunnel_name / protocol / auth_algo / encrypt_algo / ike_version / last_event / up|
|`type`|query|false|`#/components/schemas/org_tunnel_type_count`||
|`None`|None|false|``||

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `GET /api/v1/orgs/{org_id}/stats/tunnels/search`

**Summary:** searchOrgTunnelsStats

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`mxcluster_id`|query|false|`string`|If `type`==`wxtunnel`|
|`site_id`|query|false|`string`||
|`wxtunnel_id`|query|false|`string`|If `type`==`wxtunnel`|
|`ap`|query|false|`string`|If `type`==`wxtunnel`|
|`mac`|query|false|`string`|If `type`==`wan`|
|`node`|query|false|`string`|If `type`==`wan`|
|`peer_ip`|query|false|`string`|If `type`==`wan`|
|`peer_host`|query|false|`string`|If `type`==`wan`|
|`ip`|query|false|`string`|If `type`==`wan`|
|`tunnel_name`|query|false|`string`|If `type`==`wan`|
|`protocol`|query|false|`string`|If `type`==`wan`|
|`auth_algo`|query|false|`string`|If `type`==`wan`|
|`encrypt_algo`|query|false|`string`|If `type`==`wan`|
|`ike_version`|query|false|`string`|If `type`==`wan`|
|`up`|query|false|`string`|If `type`==`wan`|
|`type`|query|false|`#/components/schemas/tunnel_type`||
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

