<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpConfigTrapGroup
 */
class SnmpConfigTrapGroup extends BaseModel
{
    /** @var mixed */
    public $categories;
    /** @var string */
    public string $group_name;
    /** @var mixed */
    public $targets;
    /** @var mixed */
    public $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}