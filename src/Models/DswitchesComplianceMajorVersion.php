<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DswitchesComplianceMajorVersion
 */
class DswitchesComplianceMajorVersion extends BaseModel
{
    /** @var number */
    public float $major_count;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $system_names;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}