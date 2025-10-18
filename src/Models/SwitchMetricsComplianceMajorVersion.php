<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchMetricsComplianceMajorVersion
 */
class SwitchMetricsComplianceMajorVersion extends BaseModel
{
    /** @var integer */
    public int $major_count;
    /** @var string */
    public string $major_version;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $system_names;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}