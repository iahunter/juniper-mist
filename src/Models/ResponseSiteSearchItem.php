<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseSiteSearchItem extends BaseModel
{
    public bool $auto_upgrade_enabled;
    public string $auto_upgrade_version;
    public string $country_code;
    public bool $honeypot_enabled;
    public $id;
    public string $name;
    public $org_id;
    public $site_id;
    public $timestamp;
    public string $timezone;
    public bool $vna_enabled;
    public bool $wifi_enabled;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}