<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchVirtualChassis
 */
class SwitchVirtualChassis extends BaseModel
{
    /** @var mixed */
    public $members;
    /** @var boolean */
    public bool $preprovisioned;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}