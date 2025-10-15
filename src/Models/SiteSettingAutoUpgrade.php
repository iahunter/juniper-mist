<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteSettingAutoUpgrade extends BaseModel
{
    public array $custom_versions;
    public $day_of_week;
    public bool $enabled;
    public string $time_of_day;
    public $version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}