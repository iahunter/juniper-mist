<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookLocationCentrakEvent extends BaseModel
{
    public string $map_id;
    public int $mfg_company_id;
    public string $mfg_data;
    public $timestamp;
    public $wifi_beacon_extended_info;
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