<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApSearchWlan
 */
class ApSearchWlan extends BaseModel
{
    /** @var string */
    public string $id;
    /** @var string */
    public string $ssid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}