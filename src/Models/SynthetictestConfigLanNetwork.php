<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SynthetictestConfigLanNetwork
 */
class SynthetictestConfigLanNetwork extends BaseModel
{
    /** @var mixed */
    public $networks;
    /** @var mixed */
    public $probes;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}