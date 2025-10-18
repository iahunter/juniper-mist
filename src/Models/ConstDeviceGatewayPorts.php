<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstDeviceGatewayPorts
 */
class ConstDeviceGatewayPorts extends BaseModel
{
    /** @var string */
    public string $display;
    /** @var string */
    public string $pci_address;
    /** @var integer */
    public int $speed;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}