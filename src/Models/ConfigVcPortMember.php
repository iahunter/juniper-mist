<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConfigVcPortMember
 */
class ConfigVcPortMember extends BaseModel
{
    /** @var number */
    public float $member;
    /** @var mixed */
    public $vc_ports;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}