<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsClusterConfig extends BaseModel
{
    public string $configuration;
    public $control_link_info;
    public $ethernet_connection;
    public $fabric_link_info;
    public string $last_status_change_reason;
    public string $operational;
    public string $primary_node_health;
    public $redundancy_group_information;
    public string $secondary_node_health;
    public string $status;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}