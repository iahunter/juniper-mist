<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpVacmSecurityToGroup
 */
class SnmpVacmSecurityToGroup extends BaseModel
{
    /** @var mixed */
    public $content;
    /** @var mixed */
    public $security_model;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}