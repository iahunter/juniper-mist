<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TunnelConfigProbe
 */
class TunnelConfigProbe extends BaseModel
{
    /** @var integer */
    public int $interval;
    /** @var integer */
    public int $threshold;
    /** @var integer */
    public int $timeout;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}