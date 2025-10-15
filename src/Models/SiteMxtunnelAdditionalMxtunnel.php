<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteMxtunnelAdditionalMxtunnel extends BaseModel
{
    public $clusters;
    public int $hello_interval;
    public int $hello_retries;
    public $protocol;
    public $vlan_ids;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}