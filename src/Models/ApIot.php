<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApIot
 */
class ApIot extends BaseModel
{
    /** @var mixed */
    public $A1;
    /** @var mixed */
    public $A2;
    /** @var mixed */
    public $A3;
    /** @var mixed */
    public $A4;
    /** @var mixed */
    public $DI1;
    /** @var mixed */
    public $DI2;
    /** @var mixed */
    public $DO;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}