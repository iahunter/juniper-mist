<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TuntermMonitoringItem
 */
class TuntermMonitoringItem extends BaseModel
{
    /** @var string */
    public string $host;
    /** @var integer */
    public int $port;
    /** @var mixed */
    public $protocol;
    /** @var integer */
    public int $src_vlan_id;
    /** @var integer */
    public int $timeout;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}