<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseAutoZoneZone
 */
class ResponseAutoZoneZone extends BaseModel
{
    /** @var string */
    public string $name;
    /** @var mixed */
    public $vertices;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}