<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class InventorySearchResult extends BaseModel
{
    public string $mac;
    public bool $master;
    public $members;
    public string $model;
    public string $name;
    public $org_id;
    public string $serial;
    public $site_id;
    public string $sku;
    public string $status;
    public $type;
    public string $vc_mac;
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