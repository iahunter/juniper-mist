<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DhcpdStatLan
 */
class DhcpdStatLan extends BaseModel
{
    /** @var integer */
    public int $num_ips;
    /** @var integer */
    public int $num_leased;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}