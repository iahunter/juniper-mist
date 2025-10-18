<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedClients
 */
class SleImpactedClients extends BaseModel
{
    /** @var string */
    public string $classifier;
    /** @var mixed */
    public $clients;
    /** @var integer */
    public int $end;
    /** @var string */
    public string $failure;
    /** @var integer */
    public int $limit;
    /** @var string */
    public string $metric;
    /** @var integer */
    public int $page;
    /** @var integer */
    public int $start;
    /** @var integer */
    public int $total_count;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}