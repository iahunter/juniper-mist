<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSleMetrics
 */
class SiteSleMetrics extends BaseModel
{
    /** @var mixed */
    public $enabled;
    /** @var mixed */
    public $supported;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}