<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleSummaryImpact
 */
class SleSummaryImpact extends BaseModel
{
    /** @var number */
    public float $num_aps;
    /** @var number */
    public float $num_users;
    /** @var number */
    public float $total_aps;
    /** @var number */
    public float $total_users;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}