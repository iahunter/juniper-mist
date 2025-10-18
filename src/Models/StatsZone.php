<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsZone
 */
class StatsZone extends BaseModel
{
    /** @var mixed */
    public $assets_waits;
    /** @var mixed */
    public $clients_waits;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $map_id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $num_assets;
    /** @var integer */
    public int $num_clients;
    /** @var integer */
    public int $num_sdkclients;
    /** @var integer */
    public int $occupancy_limit;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $sdkclients_waits;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $vertices;
    /** @var mixed */
    public $vertices_m;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}