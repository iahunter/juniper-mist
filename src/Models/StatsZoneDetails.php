<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsZoneDetails
 */
class StatsZoneDetails extends BaseModel
{
    /** @var mixed */
    public $assets;
    /** @var mixed */
    public $client_waits;
    /** @var mixed */
    public $clients;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $num_clients;
    /** @var integer */
    public int $num_sdkclients;
    /** @var mixed */
    public $sdkclients;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}