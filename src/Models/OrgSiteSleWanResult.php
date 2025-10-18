<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSiteSleWanResult
 */
class OrgSiteSleWanResult extends BaseModel
{
    /** @var number */
    public float $application_health;
    /** @var number */
    public float $gateway-health;
    /** @var number */
    public float $num_clients;
    /** @var number */
    public float $num_gateways;
    /** @var mixed */
    public $site_id;
    /** @var number */
    public float $wan-link-health;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}