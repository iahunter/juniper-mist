<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchMatchingRuleOobIpConfig
 */
class SwitchMatchingRuleOobIpConfig extends BaseModel
{
    /** @var mixed */
    public $type;
    /** @var boolean */
    public bool $use_mgmt_vrf;
    /** @var boolean */
    public bool $use_mgmt_vrf_for_host_out;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}