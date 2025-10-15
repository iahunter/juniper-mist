<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Service extends BaseModel
{
    public $addresses;
    public $app_categories;
    public $app_subcategories;
    public $apps;
    public int $client_limit_down;
    public int $client_limit_up;
    public $created_time;
    public string $description;
    public $dscp;
    public $failover_policy;
    public $hostnames;
    public $id;
    public $max_jitter;
    public $max_latency;
    public $max_loss;
    public $modified_time;
    public string $name;
    public $org_id;
    public int $service_limit_down;
    public int $service_limit_up;
    public bool $sle_enabled;
    public $specs;
    public bool $ssr_relaxed_tcp_state_enforcement;
    public $traffic_class;
    public string $traffic_type;
    public $type;
    public $urls;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}