<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseDswitchesMetrics extends BaseModel
{
    public $inactive_wired_vlans;
    public $poe_compliance;
    public $switch_ap_affinity;
    public $version_compliance;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}