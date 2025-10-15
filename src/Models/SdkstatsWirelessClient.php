<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SdkstatsWirelessClient extends BaseModel
{
    public $id;
    public $last_seen;
    public string $map_id;
    public string $name;
    public $network_connection;
    public string $uuid;
    public $vbeacons;
    public float $x;
    public float $y;
    public $zones;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}