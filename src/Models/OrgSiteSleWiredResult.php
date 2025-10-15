<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgSiteSleWiredResult extends BaseModel
{
    public float $num_clients;
    public float $num_switches;
    public $site_id;
    public float $switch-bandwidth;
    public float $switch-health;
    public float $switch-throughput;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}