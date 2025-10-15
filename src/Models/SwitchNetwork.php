<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchNetwork extends BaseModel
{
    public string $gateway;
    public string $gateway6;
    public bool $isolation;
    public string $isolation_vlan_id;
    public string $subnet;
    public string $subnet6;
    public $vlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}