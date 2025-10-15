<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AuditLog extends BaseModel
{
    public $admin_id;
    public string $admin_name;
    public $after;
    public $before;
    public bool $for_site;
    public $id;
    public string $message;
    public $org_id;
    public $site_id;
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