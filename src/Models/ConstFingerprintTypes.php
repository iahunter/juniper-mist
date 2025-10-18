<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstFingerprintTypes
 */
class ConstFingerprintTypes extends BaseModel
{
    /** @var mixed */
    public $family;
    /** @var mixed */
    public $mfg;
    /** @var mixed */
    public $model;
    /** @var mixed */
    public $os;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}