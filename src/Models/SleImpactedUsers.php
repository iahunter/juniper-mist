<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedUsers
 */
class SleImpactedUsers extends BaseModel
{
    /** @var string */
    public string $classifier;
    /** @var mixed */
    public $clients;
    /** @var number */
    public float $end;
    /** @var string */
    public string $failure;
    /** @var number */
    public float $limit;
    /** @var string */
    public string $metric;
    /** @var number */
    public float $page;
    /** @var number */
    public float $start;
    /** @var number */
    public float $total_count;
    /** @var mixed */
    public $users;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}