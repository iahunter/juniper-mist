<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedGatewaysGateway
 */
class SleImpactedGatewaysGateway extends BaseModel
{
    /** @var number */
    public float $degraded;
    /** @var integer */
    public int $duration;
    /** @var string */
    public string $gateway_mac;
    /** @var string */
    public string $gateway_model;
    /** @var string */
    public string $gateway_version;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}