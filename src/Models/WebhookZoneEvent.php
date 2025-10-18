<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookZoneEvent
 */
class WebhookZoneEvent extends BaseModel
{
    /** @var string */
    public string $asset_id;
    /** @var string */
    public string $id;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $trigger;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $zone_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}