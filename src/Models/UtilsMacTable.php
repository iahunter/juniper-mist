<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsMacTable
 */
class UtilsMacTable extends BaseModel
{
    /** @var string */
    public string $mac_address;
    /** @var string */
    public string $port_id;
    /** @var string */
    public string $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}