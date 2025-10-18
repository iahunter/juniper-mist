<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsMxedgeServiceStat
 */
class StatsMxedgeServiceStat extends BaseModel
{
    /** @var string */
    public string $ext_ip;
    /** @var number */
    public float $last_seen;
    /** @var string */
    public string $package_state;
    /** @var string */
    public string $package_version;
    /** @var string */
    public string $running_state;
    /** @var integer */
    public int $uptime;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}