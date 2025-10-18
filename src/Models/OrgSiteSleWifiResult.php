<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSiteSleWifiResult
 */
class OrgSiteSleWifiResult extends BaseModel
{
    /** @var number */
    public float $ap-availability;
    /** @var number */
    public float $ap-health;
    /** @var number */
    public float $capacity;
    /** @var number */
    public float $coverage;
    /** @var number */
    public float $num_aps;
    /** @var number */
    public float $num_clients;
    /** @var number */
    public float $roaming;
    /** @var mixed */
    public $site_id;
    /** @var number */
    public float $successful-connect;
    /** @var number */
    public float $throughput;
    /** @var number */
    public float $time-to-connect;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}