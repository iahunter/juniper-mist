# Orgs Linked Applications API

## `GET /api/v1/orgs/{org_id}/setting/{app_name}/link_accounts`

**Summary:** getOrgOauthAppAuthorizationUrl

**Parameters**

|name|in|required|type|description|
|---|---|---:|---|---|
|`forward`|query|true|`string`|Mist portal url to which backend needs to redirect after successful OAuth authorization. **Required** to get the `authorization_url`|

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/orgs/{org_id}/setting/{app_name}/link_accounts`

**Summary:** addOrgOauthAppAccounts

**Responses**

- **200**: 
- **400**: Unsuccessful
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `PUT /api/v1/orgs/{org_id}/setting/{app_name}/link_accounts/{account_id}`

**Summary:** updateOrgOauthAppAccount

**Request (raw array example)**

```json
{
  "account_id": "iojzXIJWEuiD73ZvydOfg",
  "discard_guest_info": true,
  "max_daily_api_requests": 5000
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\AccountOauthConfig;

$model = new AccountOauthConfig({
  "account_id": "iojzXIJWEuiD73ZvydOfg",
  "discard_guest_info": true,
  "max_daily_api_requests": 5000
});
$resp = $client->orgs linked applications->updateOrgOauthAppAccount($model->toArray());
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

## `DELETE /api/v1/orgs/{org_id}/setting/{app_name}/link_accounts/{account_id}`

**Summary:** deleteOrgOauthAppAuthorization

**Responses**

- **200**: Successful
- **400**: Unsuccessful
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

