<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgSiteSleWifiResult extends BaseModel
{
    public float $ap-availability;
    public float $ap-health;
    public float $capacity;
    public float $coverage;
    public float $num_aps;
    public float $num_clients;
    public float $roaming;
    public $site_id;
    public float $successful-connect;
    public float $throughput;
    public float $time-to-connect;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}