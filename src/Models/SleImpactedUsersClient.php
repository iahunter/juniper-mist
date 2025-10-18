<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedUsersClient
 */
class SleImpactedUsersClient extends BaseModel
{
    /** @var number */
    public float $degraded;
    /** @var number */
    public float $duration;
    /** @var mixed */
    public $gateways;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $name;
    /** @var string */
    public string $src_ip;
    /** @var number */
    public float $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}