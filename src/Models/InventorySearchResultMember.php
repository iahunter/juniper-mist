<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model InventorySearchResultMember
 */
class InventorySearchResultMember extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var string */
    public string $model;
    /** @var string */
    public string $serial;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}