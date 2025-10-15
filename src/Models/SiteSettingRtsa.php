<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteSettingRtsa extends BaseModel
{
    public bool $app_waking;
    public bool $disable_dead_reckoning;
    public bool $disable_pressure_sensor;
    public bool $enabled;
    public bool $track_asset;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}