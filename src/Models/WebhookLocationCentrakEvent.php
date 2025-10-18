<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookLocationCentrakEvent
 */
class WebhookLocationCentrakEvent extends BaseModel
{
    /** @var string */
    public string $map_id;
    /** @var integer */
    public int $mfg_company_id;
    /** @var string */
    public string $mfg_data;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $wifi_beacon_extended_info;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}