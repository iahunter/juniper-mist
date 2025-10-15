<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookOccupancyAlertsEventAlertEventsItems extends BaseModel
{
    public int $current_occupancy;
    public string $map_id;
    public int $occupancy_limit;
    public $org_id;
    public $timestamp;
    public $type;
    public string $zone_id;
    public string $zone_name;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}