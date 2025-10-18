<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AggregateRoute
 */
class AggregateRoute extends BaseModel
{
    /** @var boolean */
    public bool $discard;
    /** @var integer */
    public int $metric;
    /** @var integer */
    public int $preference;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}