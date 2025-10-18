<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookClientJoin
 */
class WebhookClientJoin extends BaseModel
{
    /** @var mixed */
    public $events;
    /** @var string */
    public string $topic;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}