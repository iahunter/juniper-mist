<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Service
 */
class Service extends BaseModel
{
    /** @var mixed */
    public $addresses;
    /** @var mixed */
    public $app_categories;
    /** @var mixed */
    public $app_subcategories;
    /** @var mixed */
    public $apps;
    /** @var integer */
    public int $client_limit_down;
    /** @var integer */
    public int $client_limit_up;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $description;
    /** @var mixed */
    public $dscp;
    /** @var mixed */
    public $failover_policy;
    /** @var mixed */
    public $hostnames;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $max_jitter;
    /** @var mixed */
    public $max_latency;
    /** @var mixed */
    public $max_loss;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $service_limit_down;
    /** @var integer */
    public int $service_limit_up;
    /** @var boolean */
    public bool $sle_enabled;
    /** @var mixed */
    public $specs;
    /** @var boolean */
    public bool $ssr_relaxed_tcp_state_enforcement;
    /** @var mixed */
    public $traffic_class;
    /** @var string */
    public string $traffic_type;
    /** @var mixed */
    public $type;
    /** @var mixed */
    public $urls;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}