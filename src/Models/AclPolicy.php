<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AclPolicy
 */
class AclPolicy extends BaseModel
{
    /** @var mixed */
    public $actions;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $src_tags;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}