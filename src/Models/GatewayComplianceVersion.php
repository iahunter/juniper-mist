<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayComplianceVersion
 */
class GatewayComplianceVersion extends BaseModel
{
    /** @var mixed */
    public $major_version;
    /** @var number */
    public float $score;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}