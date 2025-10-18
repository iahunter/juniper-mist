<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RrmNeighborsNeighbor
 */
class RrmNeighborsNeighbor extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var integer */
    public int $rssi;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}