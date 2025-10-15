<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookLocationAssetEvent extends BaseModel
{
    public int $battery_voltage;
    public string $eddystone_uid_instance;
    public string $eddystone_uid_namespace;
    public string $eddystone_url_url;
    public int $ibeacon_major;
    public int $ibeacon_minor;
    public string $ibeacon_uuid;
    public string $mac;
    public string $map_id;
    public int $mfg_company_id;
    public string $mfg_data;
    public $site_id;
    public $timestamp;
    public string $type;
    public float $x;
    public float $y;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}