<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstTrafficType
 */
class ConstTrafficType extends BaseModel
{
    /** @var string */
    public string $display;
    /** @var integer */
    public int $dscp;
    /** @var string */
    public string $failover_policy;
    /** @var integer */
    public int $max_jitter;
    /** @var integer */
    public int $max_latency;
    /** @var integer */
    public int $max_loss;
    /** @var string */
    public string $name;
    /** @var string */
    public string $traffic_class;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}