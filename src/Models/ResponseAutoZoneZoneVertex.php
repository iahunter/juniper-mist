<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseAutoZoneZoneVertex
 */
class ResponseAutoZoneZoneVertex extends BaseModel
{
    /** @var integer */
    public int $x;
    /** @var integer */
    public int $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}