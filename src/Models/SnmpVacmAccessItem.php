<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpVacmAccessItem
 */
class SnmpVacmAccessItem extends BaseModel
{
    /** @var string */
    public string $group_name;
    /** @var mixed */
    public $prefix_list;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}