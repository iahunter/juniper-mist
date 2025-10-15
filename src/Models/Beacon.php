<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Beacon extends BaseModel
{
    public $created_time;
    public string $eddystone_instance;
    public string $eddystone_namespace;
    public string $eddystone_url;
    public bool $for_site;
    public int $ibeacon_major;
    public int $ibeacon_minor;
    public string $ibeacon_uuid;
    public $id;
    public string $mac;
    public string $map_id;
    public $modified_time;
    public string $name;
    public $org_id;
    public int $power;
    public $site_id;
    public $type;
    public float $x;
    public float $y;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}