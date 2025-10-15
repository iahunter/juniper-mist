<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstWebhookTopic extends BaseModel
{
    public bool $allows_single_event_per_message;
    public bool $for_org;
    public bool $has_delivery_results;
    public bool $internal;
    public string $key;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}