<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class VirtualChassisConfigMember extends BaseModel
{
    public bool $locating;
    public string $mac;
    public int $member_id;
    public $vc_ports;
    public $vc_role;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}