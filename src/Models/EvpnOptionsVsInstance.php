<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EvpnOptionsVsInstance
 */
class EvpnOptionsVsInstance extends BaseModel
{
    /** @var mixed */
    public $networks;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}