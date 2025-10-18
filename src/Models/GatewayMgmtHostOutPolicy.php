<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model GatewayMgmtHostOutPolicy
 */
class GatewayMgmtHostOutPolicy extends BaseModel
{
    /** @var string */
    public string $path_preference;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}