<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsShowOspfNeighbors
 */
class UtilsShowOspfNeighbors extends BaseModel
{
    /** @var string */
    public string $neighbor;
    /** @var mixed */
    public $node;
    /** @var string */
    public string $port_id;
    /** @var string */
    public string $vrf;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}