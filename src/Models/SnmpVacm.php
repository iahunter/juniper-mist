<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpVacm
 */
class SnmpVacm extends BaseModel
{
    /** @var mixed */
    public $access;
    /** @var mixed */
    public $security_to_group;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}