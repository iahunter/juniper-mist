<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchPortUsageStormControl extends BaseModel
{
    public bool $disable_port;
    public bool $no_broadcast;
    public bool $no_multicast;
    public bool $no_registered_multicast;
    public bool $no_unknown_unicast;
    public int $percentage;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}