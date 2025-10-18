<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model LatlngTl
 */
class LatlngTl extends BaseModel
{
    /** @var string */
    public string $lat;
    /** @var string */
    public string $lng;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}