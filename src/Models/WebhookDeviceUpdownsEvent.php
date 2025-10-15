<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookDeviceUpdownsEvent extends BaseModel
{
    public string $ap;
    public string $ap_name;
    public bool $for_site;
    public $org_id;
    public $site_id;
    public string $site_name;
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