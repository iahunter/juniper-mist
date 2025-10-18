<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UseAutoApValues
 */
class UseAutoApValues extends BaseModel
{
    /** @var boolean */
    public bool $accept;
    /** @var mixed */
    public $for;
    /** @var mixed */
    public $macs;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}