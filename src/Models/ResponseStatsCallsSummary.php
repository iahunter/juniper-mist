<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseStatsCallsSummary
 */
class ResponseStatsCallsSummary extends BaseModel
{
    /** @var number */
    public float $bad_minutes_client;
    /** @var number */
    public float $bad_minutes_site_wan;
    /** @var number */
    public float $bad_minutes_wireless;
    /** @var integer */
    public int $num_aps;
    /** @var integer */
    public int $num_users;
    /** @var number */
    public float $total_minutes;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}