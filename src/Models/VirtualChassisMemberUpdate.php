<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class VirtualChassisMemberUpdate extends BaseModel
{
    public string $mac;
    public int $member;
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