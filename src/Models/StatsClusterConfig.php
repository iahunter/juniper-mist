<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsClusterConfig
 */
class StatsClusterConfig extends BaseModel
{
    /** @var string */
    public string $configuration;
    /** @var mixed */
    public $control_link_info;
    /** @var mixed */
    public $ethernet_connection;
    /** @var mixed */
    public $fabric_link_info;
    /** @var string */
    public string $last_status_change_reason;
    /** @var string */
    public string $operational;
    /** @var string */
    public string $primary_node_health;
    /** @var mixed */
    public $redundancy_group_information;
    /** @var string */
    public string $secondary_node_health;
    /** @var string */
    public string $status;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}