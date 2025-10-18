<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AssetRssiZone
 */
class AssetRssiZone extends BaseModel
{
    /** @var mixed */
    public $id;
    /** @var number */
    public float $since;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}