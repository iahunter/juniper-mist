<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookAuditEvent
 */
class WebhookAuditEvent extends BaseModel
{
    /** @var string */
    public string $admin_name;
    /** @var mixed */
    public $device_id;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $message;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $src_ip;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}