<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookDiscoveredRawRssiEvent extends BaseModel
{
    public $ap_loc;
    public int $beam;
    public string $device_id;
    public int $ibeacon_major;
    public int $ibeacon_minor;
    public string $ibeacon_uuid;
    public bool $is_asset;
    public string $mac;
    public string $map_id;
    public string $mfg_company_id;
    public string $mfg_data;
    public $org_id;
    public float $rssi;
    public $service_packets;
    public $site_id;
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