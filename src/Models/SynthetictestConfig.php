<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SynthetictestConfig
 */
class SynthetictestConfig extends BaseModel
{
    /** @var mixed */
    public $aggressiveness;
    /** @var mixed */
    public $custom_probes;
    /** @var boolean */
    public bool $disabled;
    /** @var mixed */
    public $lan_networks;
    /** @var mixed */
    public $vlans;
    /** @var mixed */
    public $wan_speedtest;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}