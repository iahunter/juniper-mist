<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApSwitch extends BaseModel
{
    public bool $enabled;
    public $eth0;
    public $eth1;
    public $eth2;
    public $eth3;
    public $module;
    public $wds;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}