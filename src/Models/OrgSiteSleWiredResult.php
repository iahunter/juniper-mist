<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSiteSleWiredResult
 */
class OrgSiteSleWiredResult extends BaseModel
{
    /** @var number */
    public float $num_clients;
    /** @var number */
    public float $num_switches;
    /** @var mixed */
    public $site_id;
    /** @var number */
    public float $switch-bandwidth;
    /** @var number */
    public float $switch-health;
    /** @var number */
    public float $switch-throughput;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}