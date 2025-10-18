<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsShowForwardingTable
 */
class UtilsShowForwardingTable extends BaseModel
{
    /** @var mixed */
    public $node;
    /** @var string */
    public string $prefix;
    /** @var string */
    public string $service_ip;
    /** @var string */
    public string $service_name;
    /** @var integer */
    public int $service_port;
    /** @var string */
    public string $service_protocol;
    /** @var string */
    public string $service_tenant;
    /** @var string */
    public string $vrf;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}