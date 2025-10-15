<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookDeviceEventsEvent extends BaseModel
{
    public string $ap;
    public string $ap_name;
    public string $audit_id;
    public string $device_name;
    public $device_type;
    public $ev_type;
    public string $mac;
    public $org_id;
    public string $reason;
    public $site_id;
    public string $site_name;
    public string $text;
    public $timestamp;
    public string $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}