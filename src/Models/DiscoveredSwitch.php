<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DiscoveredSwitch extends BaseModel
{
    public bool $adopted;
    public $ap_redundancy;
    public $aps;
    public $chassis_id;
    public bool $for_site;
    public string $model;
    public $org_id;
    public $site_id;
    public string $system_desc;
    public string $system_name;
    public $timestamp;
    public string $vendor;
    public string $version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}