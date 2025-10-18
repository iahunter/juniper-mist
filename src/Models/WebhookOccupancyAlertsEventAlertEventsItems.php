<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookOccupancyAlertsEventAlertEventsItems
 */
class WebhookOccupancyAlertsEventAlertEventsItems extends BaseModel
{
    /** @var integer */
    public int $current_occupancy;
    /** @var string */
    public string $map_id;
    /** @var integer */
    public int $occupancy_limit;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $zone_id;
    /** @var string */
    public string $zone_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}