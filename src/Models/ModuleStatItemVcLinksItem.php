<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ModuleStatItemVcLinksItem
 */
class ModuleStatItemVcLinksItem extends BaseModel
{
    /** @var integer */
    public int $neighbor_module_idx;
    /** @var string */
    public string $neighbor_port_id;
    /** @var string */
    public string $port_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}