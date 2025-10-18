<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteWidsRepeatedAuthFailures
 */
class SiteWidsRepeatedAuthFailures extends BaseModel
{
    /** @var integer */
    public int $duration;
    /** @var integer */
    public int $threshold;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}