<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsRssiZone
 */
class StatsRssiZone extends BaseModel
{
    /** @var mixed */
    public $assets_waits;
    /** @var mixed */
    public $clients_waits;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $devices;
    /** @var mixed */
    public $id;
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

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}