<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsPing
 */
class UtilsPing extends BaseModel
{
    /** @var integer */
    public int $count;
    /** @var string */
    public string $egress_interface;
    /** @var string */
    public string $host;
    /** @var mixed */
    public $node;
    /** @var integer */
    public int $size;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}