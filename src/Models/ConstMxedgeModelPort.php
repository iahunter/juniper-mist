<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstMxedgeModelPort
 */
class ConstMxedgeModelPort extends BaseModel
{
    /** @var string */
    public string $display;
    /** @var integer */
    public int $speed;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}