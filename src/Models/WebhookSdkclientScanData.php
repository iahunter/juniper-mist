<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookSdkclientScanData
 */
class WebhookSdkclientScanData extends BaseModel
{
    /** @var mixed */
    public $events;
    /** @var mixed */
    public $topic;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}