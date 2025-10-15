<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseUpgradeOrgDevices extends BaseModel
{
    public bool $enable_p2p;
    public bool $force;
    public $id;
    public $strategy;
    public string $target_version;
    public $upgrades;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}