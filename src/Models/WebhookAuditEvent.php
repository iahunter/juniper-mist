<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookAuditEvent extends BaseModel
{
    public string $admin_name;
    public $device_id;
    public $id;
    public string $message;
    public $org_id;
    public $site_id;
    public string $src_ip;
    public $timestamp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}