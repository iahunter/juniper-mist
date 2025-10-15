<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Guest extends BaseModel
{
    public string $access_code_email;
    public string $ap_mac;
    public string $auth_method;
    public bool $authorized;
    public float $authorized_expiring_time;
    public float $authorized_time;
    public string $company;
    public string $email;
    public string $field1;
    public string $field2;
    public string $field3;
    public string $field4;
    public string $mac;
    public int $minutes;
    public string $name;
    public bool $random_mac;
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