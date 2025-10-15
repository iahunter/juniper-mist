<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AssetOfInterest extends BaseModel
{
    public string $ap_mac;
    public float $beam;
    public string $by;
    public string $curr_site;
    public string $device_name;
    public $id;
    public $last_seen;
    public string $mac;
    public string $manufacture;
    public string $map_id;
    public string $name;
    public float $rssi;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}