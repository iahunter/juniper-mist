<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TuntermPortConfig
 */
class TuntermPortConfig extends BaseModel
{
    /** @var mixed */
    public $downstream_ports;
    /** @var boolean */
    public bool $separate_upstream_downstream;
    /** @var integer */
    public int $upstream_port_vlan_id;
    /** @var mixed */
    public $upstream_ports;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}