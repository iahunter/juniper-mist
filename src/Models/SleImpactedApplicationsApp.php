<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleImpactedApplicationsApp
 */
class SleImpactedApplicationsApp extends BaseModel
{
    /** @var string */
    public string $app;
    /** @var integer */
    public int $degraded;
    /** @var integer */
    public int $duration;
    /** @var string */
    public string $name;
    /** @var integer */
    public int $threshold;
    /** @var integer */
    public int $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}