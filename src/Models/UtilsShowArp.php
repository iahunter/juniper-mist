<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsShowArp
 */
class UtilsShowArp extends BaseModel
{
    /** @var integer */
    public int $duration;
    /** @var integer */
    public int $interval;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $port_id;
    /** @var string */
    public string $vrf;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}