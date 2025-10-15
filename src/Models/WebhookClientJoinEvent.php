<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookClientJoinEvent extends BaseModel
{
    public string $ap;
    public string $ap_name;
    public string $band;
    public string $bssid;
    public int $connect;
    public float $connect_float;
    public string $mac;
    public $org_id;
    public float $rssi;
    public $site_id;
    public string $site_name;
    public string $ssid;
    public $timestamp;
    public float $version;
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