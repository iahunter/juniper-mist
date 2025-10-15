<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsClusterConfigFabricLinkInfo extends BaseModel
{
    public string $DataPlaneNotifiedStatus;
    public $Interface;
    public string $InternalStatus;
    public string $State;
    public string $Status;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}