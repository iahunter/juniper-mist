<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookClientSessionsEvent extends BaseModel
{
    public string $ap;
    public string $ap_name;
    public string $band;
    public string $bssid;
    public string $client_family;
    public string $client_manufacture;
    public string $client_model;
    public string $client_os;
    public int $connect;
    public float $connect_float;
    public int $disconnect;
    public float $disconnect_float;
    public int $duration;
    public string $mac;
    public string $next_ap;
    public $org_id;
    public float $rssi;
    public $site_id;
    public string $site_name;
    public string $ssid;
    public int $termination_reason;
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