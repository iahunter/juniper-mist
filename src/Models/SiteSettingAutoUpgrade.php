<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingAutoUpgrade
 */
class SiteSettingAutoUpgrade extends BaseModel
{
    /** @var object */
    public $custom_versions;
    /** @var mixed */
    public $day_of_week;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $time_of_day;
    /** @var mixed */
    public $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}