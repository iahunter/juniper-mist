<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseMapImportFloorplan
 */
class ResponseMapImportFloorplan extends BaseModel
{
    /** @var string */
    public string $action;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $name;
    /** @var string */
    public string $reason;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}