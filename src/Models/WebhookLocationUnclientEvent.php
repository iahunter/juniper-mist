<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookLocationUnclientEvent
 */
class WebhookLocationUnclientEvent extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;
    /** @var mixed */
    public $wifi_beacon_extended_info;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}