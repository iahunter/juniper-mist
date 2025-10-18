<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ModuleStatItemNetworkResource
 */
class ModuleStatItemNetworkResource extends BaseModel
{
    /** @var integer */
    public int $count;
    /** @var integer */
    public int $limit;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}