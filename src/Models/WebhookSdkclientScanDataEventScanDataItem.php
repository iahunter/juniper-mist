<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookSdkclientScanDataEventScanDataItem extends BaseModel
{
    public string $ap;
    public $band;
    public string $bssid;
    public int $channel;
    public float $rssi;
    public string $ssid;
    public $timestamp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}