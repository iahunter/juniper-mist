<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MistNacedge extends BaseModel
{
    public int $auth_ttl;
    public string $default_dot1x_vlan;
    public string $default_vlan;
    public bool $enabled;
    public $mxedge_hosts;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}