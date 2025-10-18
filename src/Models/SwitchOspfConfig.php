<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchOspfConfig
 */
class SwitchOspfConfig extends BaseModel
{
    /** @var mixed */
    public $areas;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $export_policy;
    /** @var string */
    public string $import_policy;
    /** @var mixed */
    public $reference_bandwidth;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}