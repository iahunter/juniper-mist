<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseVirtualChassisConfig extends BaseModel
{
    public string $config_type;
    public $id;
    public bool $locating;
    public $members;
    public string $model;
    public int $num_routing_engines;
    public $org_id;
    public string $serial;
    public $site_id;
    public string $status;
    public string $vc_mac;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}