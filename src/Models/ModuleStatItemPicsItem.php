<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ModuleStatItemPicsItem
 */
class ModuleStatItemPicsItem extends BaseModel
{
    /** @var integer */
    public int $index;
    /** @var string */
    public string $model_number;
    /** @var mixed */
    public $port_groups;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}