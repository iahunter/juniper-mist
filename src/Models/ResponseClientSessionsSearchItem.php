<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseClientSessionsSearchItem extends BaseModel
{
    public string $ap;
    public string $band;
    public string $client_manufacture;
    public float $connect;
    public float $disconnect;
    public float $duration;
    public string $mac;
    public $org_id;
    public $site_id;
    public string $ssid;
    public $tags;
    public $timestamp;
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