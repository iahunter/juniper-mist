<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstAppSubcategoryDefinition
 */
class ConstAppSubcategoryDefinition extends BaseModel
{
    /** @var string */
    public string $display;
    /** @var string */
    public string $key;
    /** @var string */
    public string $traffic_type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}