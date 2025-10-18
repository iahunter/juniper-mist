# Utilities Wi-Fi API

## `POST /api/v1/orgs/{org_id}/clients/{client_mac}/coa`

**Summary:** reauthOrgDot1xWirelessClient

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/clients/disconnect`

**Summary:** disconnectSiteMultipleClients

**Request (raw array example)**

```json
[
  "string_example"
]
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\Strings;

$model = new Strings([
  "string_example"
]);
$resp = $client->utilities wi-fi->disconnectSiteMultipleClients($model->toArray());
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

## `POST /api/v1/sites/{site_id}/clients/unauthorize`

**Summary:** unauthorizeSiteMultipleClients

**Request (raw array example)**

```json
{
  "macs": [
    "string_example"
  ]
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\MacAddresses;

$model = new MacAddresses({
  "macs": [
    "string_example"
  ]
});
$resp = $client->utilities wi-fi->unauthorizeSiteMultipleClients($model->toArray());
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

## `POST /api/v1/sites/{site_id}/clients/{client_mac}/coa`

**Summary:** reauthSiteDot1xWirelessClient

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/clients/{client_mac}/disconnect`

**Summary:** disconnectSiteWirelessClient

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/clients/{client_mac}/unauthorize`

**Summary:** unauthorizeSiteWirelessClient

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/reprovision`

**Summary:** reprovisionSiteAllDevices

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/devices/reset_radio_config`

**Summary:** resetSiteAllApsToUseRrm

**Request (raw array example)**

```json
{
  "bands": [
    "string_example"
  ],
  "force": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsResetRadioConfig;

$model = new UtilsResetRadioConfig({
  "bands": [
    "string_example"
  ],
  "force": true
});
$resp = $client->utilities wi-fi->resetSiteAllApsToUseRrm($model->toArray());
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

## `POST /api/v1/sites/{site_id}/devices/zeroize`

**Summary:** zeroizeSiteFipsAllAps

**Request (raw array example)**

```json
{
  "password": "string_example"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsZeroizeFips;

$model = new UtilsZeroizeFips({
  "password": "string_example"
});
$resp = $client->utilities wi-fi->zeroizeSiteFipsAllAps($model->toArray());
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

## `POST /api/v1/sites/{site_id}/rogues/{rogue_bssid}/deauth_clients`

**Summary:** deauthSiteWirelessClientsConnectedToARogue

**Responses**

- **200**: 
- **400**: 
- **401**: 
- **403**: 
- **404**: 
- **429**: 

---

## `POST /api/v1/sites/{site_id}/rrm/optimize`

**Summary:** optimizeSiteRrm

**Request (raw array example)**

```json
{
  "bands": [
    "string_example"
  ],
  "macs": [
    "5c5b35000001"
  ],
  "txpower_only": true
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\UtilsRrmOptimize;

$model = new UtilsRrmOptimize({
  "bands": [
    "string_example"
  ],
  "macs": [
    "5c5b35000001"
  ],
  "txpower_only": true
});
$resp = $client->utilities wi-fi->optimizeSiteRrm($model->toArray());
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

## `POST /api/v1/utils/test_smsglobal`

**Summary:** testSiteWlanSmsGlobal

**Request (raw array example)**

```json
{
  "smsglobal_api_key": "123456",
  "smsglobal_api_secret": "abcdef",
  "to": "+911122334455"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\TestSmsGlobal;

$model = new TestSmsGlobal({
  "smsglobal_api_key": "123456",
  "smsglobal_api_secret": "abcdef",
  "to": "+911122334455"
});
$resp = $client->utilities wi-fi->testSiteWlanSmsGlobal($model->toArray());
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

## `POST /api/v1/utils/test_telstra`

**Summary:** testSiteWlanTelstraSetup

**Request (raw array example)**

```json
{
  "telstra_client_id": "123456",
  "telstra_client_secret": "abcdef",
  "to": "+911122334455"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\TestTelstra;

$model = new TestTelstra({
  "telstra_client_id": "123456",
  "telstra_client_secret": "abcdef",
  "to": "+911122334455"
});
$resp = $client->utilities wi-fi->testSiteWlanTelstraSetup($model->toArray());
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

## `POST /api/v1/utils/test_twilio`

**Summary:** testSiteWlanTwilioSetup

**Request (raw array example)**

```json
{
  "from": "+185051234567",
  "to": "+19999999999",
  "twilio_auth_token": "xxxxxxxxxxxxxxxxxx",
  "twilio_sid": "xxxxxxxxxxxxxxxxxx"
}
```

**Request (typed model example)**

```php
use Iahunter\JuniperMist\Models\TestTwilio;

$model = new TestTwilio({
  "from": "+185051234567",
  "to": "+19999999999",
  "twilio_auth_token": "xxxxxxxxxxxxxxxxxx",
  "twilio_sid": "xxxxxxxxxxxxxxxxxx"
});
$resp = $client->utilities wi-fi->testSiteWlanTwilioSetup($model->toArray());
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

