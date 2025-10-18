<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookOccupancyAlertsEvent
 */
class WebhookOccupancyAlertsEvent extends BaseModel
{
    /** @var mixed */
    public $alert_events;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $site_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}