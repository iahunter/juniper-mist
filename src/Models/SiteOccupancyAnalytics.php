<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteOccupancyAnalytics
 */
class SiteOccupancyAnalytics extends BaseModel
{
    /** @var boolean */
    public bool $assets_enabled;
    /** @var boolean */
    public bool $clients_enabled;
    /** @var integer */
    public int $min_duration;
    /** @var boolean */
    public bool $sdkclients_enabled;
    /** @var boolean */
    public bool $unconnected_clients_enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}