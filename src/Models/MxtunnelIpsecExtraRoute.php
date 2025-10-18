<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxtunnelIpsecExtraRoute
 */
class MxtunnelIpsecExtraRoute extends BaseModel
{
    /** @var string */
    public string $dest;
    /** @var string */
    public string $next_hop;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}