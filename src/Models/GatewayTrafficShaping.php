<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayTrafficShaping
 */
class GatewayTrafficShaping extends BaseModel
{
    /** @var mixed */
    public $class_percentages;
    /** @var boolean */
    public bool $enabled;
    /** @var integer */
    public int $max_tx_kbps;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}