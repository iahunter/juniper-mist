<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseLogSearchItem extends BaseModel
{
    public string $admin_id;
    public string $admin_name;
    public array $after;
    public array $before;
    public bool $for_site;
    public $id;
    public string $message;
    public $org_id;
    public string $site_id;
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