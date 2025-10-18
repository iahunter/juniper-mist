<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SecintelProfile
 */
class SecintelProfile extends BaseModel
{
    /** @var string */
    public string $name;
    /** @var mixed */
    public $profiles;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}