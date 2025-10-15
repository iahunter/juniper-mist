<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookZoneEvent extends BaseModel
{
    public string $asset_id;
    public string $id;
    public string $mac;
    public string $map_id;
    public string $name;
    public $site_id;
    public $timestamp;
    public $trigger;
    public $type;
    public string $zone_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}