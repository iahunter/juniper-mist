<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookLocationUnclientEvent extends BaseModel
{
    public string $mac;
    public string $map_id;
    public $site_id;
    public $timestamp;
    public string $type;
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