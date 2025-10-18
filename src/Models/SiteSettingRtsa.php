<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingRtsa
 */
class SiteSettingRtsa extends BaseModel
{
    /** @var boolean */
    public bool $app_waking;
    /** @var boolean */
    public bool $disable_dead_reckoning;
    /** @var boolean */
    public bool $disable_pressure_sensor;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $track_asset;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}