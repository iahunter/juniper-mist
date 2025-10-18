<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EvpnOptionsUnderlay
 */
class EvpnOptionsUnderlay extends BaseModel
{
    /** @var integer */
    public int $as_base;
    /** @var string */
    public string $routed_id_prefix;
    /** @var string */
    public string $subnet;
    /** @var boolean */
    public bool $use_ipv6;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}