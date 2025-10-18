<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayComplianceMajorVersionProperties
 */
class GatewayComplianceMajorVersionProperties extends BaseModel
{
    /** @var integer */
    public int $major_count;
    /** @var string */
    public string $major_version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}