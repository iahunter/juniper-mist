<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AssetFilter extends BaseModel
{
    public string $ap_mac;
    public int $beam;
    public $created_time;
    public bool $disabled;
    public string $eddystone_uid_namespace;
    public string $eddystone_url;
    public bool $for_site;
    public int $ibeacon_major;
    public string $ibeacon_uuid;
    public $id;
    public int $mfg_company_id;
    public $modified_time;
    public string $name;
    public $org_id;
    public int $rssi;
    public string $service_uuid;
    public $site_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}