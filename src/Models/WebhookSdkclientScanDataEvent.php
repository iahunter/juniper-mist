<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookSdkclientScanDataEvent extends BaseModel
{
    public string $connection_ap;
    public string $connection_band;
    public string $connection_bssid;
    public int $connection_channel;
    public float $connection_rssi;
    public $last_seen;
    public string $mac;
    public $scan_data;
    public $site_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}