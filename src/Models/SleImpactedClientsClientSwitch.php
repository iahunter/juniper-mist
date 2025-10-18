<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedClientsClientSwitch
 */
class SleImpactedClientsClientSwitch extends BaseModel
{
    /** @var mixed */
    public $interfaces;
    /** @var string */
    public string $switch_mac;
    /** @var string */
    public string $switch_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}