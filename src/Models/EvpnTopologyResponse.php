<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EvpnTopologyResponse extends BaseModel
{
    public $created_time;
    public $evpn_options;
    public $id;
    public $modified_time;
    public string $name;
    public $org_id;
    public bool $overwrite;
    public array $pod_names;
    public $site_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}