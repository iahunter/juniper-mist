<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SynthetictestConfig extends BaseModel
{
    public $aggressiveness;
    public $custom_probes;
    public bool $disabled;
    public $lan_networks;
    public $vlans;
    public $wan_speedtest;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}