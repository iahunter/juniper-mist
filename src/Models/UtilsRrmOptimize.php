<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsRrmOptimize
 */
class UtilsRrmOptimize extends BaseModel
{
    /** @var mixed */
    public $bands;
    /** @var mixed */
    public $macs;
    /** @var boolean */
    public bool $txpower_only;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}