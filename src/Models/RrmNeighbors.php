<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RrmNeighbors
 */
class RrmNeighbors extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $neighbors;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}