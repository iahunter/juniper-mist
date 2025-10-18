<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstAppCategoryDefinition
 */
class ConstAppCategoryDefinition extends BaseModel
{
    /** @var string */
    public string $display;
    /** @var mixed */
    public $filters;
    /** @var mixed */
    public $includes;
    /** @var string */
    public string $key;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}