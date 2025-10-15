<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookGuestAuthorizationsEvent extends BaseModel
{
    public string $ap;
    public string $auth_method;
    public int $authorized_expiring_time;
    public int $authorized_time;
    public string $carrier;
    public string $client;
    public string $company;
    public string $email;
    public string $field1;
    public string $field2;
    public string $field3;
    public string $field4;
    public string $mobile;
    public string $name;
    public $org_id;
    public $site_id;
    public string $sms_gateway;
    public string $sponsor_email;
    public string $ssid;
    public string $wlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}