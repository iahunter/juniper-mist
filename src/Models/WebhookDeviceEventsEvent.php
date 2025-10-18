<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookDeviceEventsEvent
 */
class WebhookDeviceEventsEvent extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $ap_name;
    /** @var string */
    public string $audit_id;
    /** @var string */
    public string $device_name;
    /** @var mixed */
    public $device_type;
    /** @var mixed */
    public $ev_type;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $reason;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $site_name;
    /** @var string */
    public string $text;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}