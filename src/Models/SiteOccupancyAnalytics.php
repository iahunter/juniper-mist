<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteOccupancyAnalytics extends BaseModel
{
    public bool $assets_enabled;
    public bool $clients_enabled;
    public int $min_duration;
    public bool $sdkclients_enabled;
    public bool $unconnected_clients_enabled;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}