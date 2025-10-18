<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApSwitchSetting
 */
class ApSwitchSetting extends BaseModel
{
    /** @var boolean */
    public bool $enable_vlan;
    /** @var mixed */
    public $port_vlan_id;
    /** @var mixed */
    public $vlan_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}