<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanQos
 */
class WlanQos extends BaseModel
{
    /** @var mixed */
    public $class;
    /** @var boolean */
    public bool $overwrite;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}