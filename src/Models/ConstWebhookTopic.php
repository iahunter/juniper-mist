<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstWebhookTopic
 */
class ConstWebhookTopic extends BaseModel
{
    /** @var boolean */
    public bool $allows_single_event_per_message;
    /** @var boolean */
    public bool $for_org;
    /** @var boolean */
    public bool $has_delivery_results;
    /** @var boolean */
    public bool $internal;
    /** @var string */
    public string $key;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}