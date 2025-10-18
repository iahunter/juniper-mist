<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookSiteSleEventSle
 */
class WebhookSiteSleEventSle extends BaseModel
{
    /** @var number */
    public float $ap-availability;
    /** @var number */
    public float $successful-connect;
    /** @var number */
    public float $time-to-connect;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}