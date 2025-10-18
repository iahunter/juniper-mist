<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchPortUsageDynamicRule
 */
class SwitchPortUsageDynamicRule extends BaseModel
{
    /** @var string */
    public string $equals;
    /** @var mixed */
    public $equals_any;
    /** @var string */
    public string $expression;
    /** @var mixed */
    public $src;
    /** @var string */
    public string $usage;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}