<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsRssiZone extends BaseModel
{
    public $assets_waits;
    public $clients_waits;
    public $created_time;
    public $devices;
    public $id;
    public $modified_time;
    public string $name;
    public int $num_assets;
    public int $num_clients;
    public int $num_sdkclients;
    public int $occupancy_limit;
    public $org_id;
    public $sdkclients_waits;
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