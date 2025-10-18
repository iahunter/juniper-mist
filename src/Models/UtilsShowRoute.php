<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsShowRoute
 */
class UtilsShowRoute extends BaseModel
{
    /** @var integer */
    public int $duration;
    /** @var integer */
    public int $interval;
    /** @var string */
    public string $neighbor;
    /** @var mixed */
    public $node;
    /** @var string */
    public string $prefix;
    /** @var mixed */
    public $protocol;
    /** @var string */
    public string $route;
    /** @var string */
    public string $vrf;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}