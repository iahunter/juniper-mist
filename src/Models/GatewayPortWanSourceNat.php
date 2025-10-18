<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayPortWanSourceNat
 */
class GatewayPortWanSourceNat extends BaseModel
{
    /** @var boolean */
    public bool $disabled;
    /** @var string */
    public string $nat6_pool;
    /** @var string */
    public string $nat_pool;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}