<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApRedundancy
 */
class ApRedundancy extends BaseModel
{
    /** @var mixed */
    public $modules;
    /** @var integer */
    public int $num_aps;
    /** @var integer */
    public int $num_aps_with_switch_redundancy;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}