<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class DiscoveredSwitchMetric extends BaseModel
{
    public bool $adopted;
    public $aps;
    public $chassis_id;
    public string $hostname;
    public string $mgmt_addr;
    public string $model;
    public $org_id;
    public string $scope;
    public int $score;
    public $site_id;
    public string $system_desc;
    public string $system_name;
    public $timestamp;
    public string $type;
    public string $vendor;
    public string $version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}