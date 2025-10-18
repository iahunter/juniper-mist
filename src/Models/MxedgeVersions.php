<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeVersions
 */
class MxedgeVersions extends BaseModel
{
    /** @var string */
    public string $mxagent;
    /** @var string */
    public string $tunterm;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}