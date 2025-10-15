<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsZoneDetails extends BaseModel
{
    public $assets;
    public $client_waits;
    public $clients;
    public $id;
    public string $map_id;
    public string $name;
    public int $num_clients;
    public int $num_sdkclients;
    public $sdkclients;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}