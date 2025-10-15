<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgSiteSleWanResult extends BaseModel
{
    public float $application_health;
    public float $gateway-health;
    public float $num_clients;
    public float $num_gateways;
    public $site_id;
    public float $wan-link-health;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}