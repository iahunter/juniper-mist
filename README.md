# iahunter/juniper-mist

[![PHP](https://img.shields.io/badge/php-8.2%2B-blue.svg)](https://www.php.net/)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)

## Quick Start

```bash
composer require iahunter/juniper-mist
```

```php
require 'vendor/autoload.php';

use Iahunter\JuniperMist\Client;

$client = new Client('YOUR_API_TOKEN');

// List organizations
$orgs = $client->orgs->listOrgs();

// Get org details
$org = $client->orgs->getOrg($orgs[0]['id']);

// Create a site
$newSite = $client->sites->createSite($org['id'], [
    'name' => 'HQ-WiFi',
    'country_code' => 'US',
    'timezone' => 'America/Chicago'
]);

// Create an org-level WLAN
$wlan = $client->wlans->createOrgWlan($org['id'], [
    'ssid' => 'Corp-WiFi',
    'enabled' => true
]);

// Create a PSK
$psk = $client->psks->createPsk($org['id'], [
    'name' => 'Guest-Access',
    'ssid' => 'Corp-WiFi',
    'passphrase' => 'guest-wifi-code'
]);

// Reboot a device
$devices = $client->devices->listDevices($org['id']);
if (!empty($devices)) {
    $client->devices->rebootDevice($org['id'], $devices[0]['mac']);
}
```
