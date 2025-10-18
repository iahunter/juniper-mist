<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RoutingPolicyTerm
 */
class RoutingPolicyTerm extends BaseModel
{
    /** @var mixed */
    public $actions;
    /** @var mixed */
    public $matching;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}