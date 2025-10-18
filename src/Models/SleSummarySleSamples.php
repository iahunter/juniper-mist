<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SleSummarySleSamples
 */
class SleSummarySleSamples extends BaseModel
{
    /** @var mixed */
    public $degraded;
    /** @var mixed */
    public $total;
    /** @var mixed */
    public $value;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}