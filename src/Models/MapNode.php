<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MapNode
 */
class MapNode extends BaseModel
{
    /** @var object */
    public $edges;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $position;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}