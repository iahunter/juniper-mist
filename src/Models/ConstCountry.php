<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstCountry
 */
class ConstCountry extends BaseModel
{
    /** @var string */
    public string $alpha2;
    /** @var boolean */
    public bool $certified;
    /** @var string */
    public string $name;
    /** @var number */
    public float $numeric;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}