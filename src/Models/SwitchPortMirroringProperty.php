<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchPortMirroringProperty
 */
class SwitchPortMirroringProperty extends BaseModel
{
    /** @var mixed */
    public $input_networks_ingress;
    /** @var mixed */
    public $input_port_ids_egress;
    /** @var mixed */
    public $input_port_ids_ingress;
    /** @var string */
    public string $output_ip_address;
    /** @var string */
    public string $output_network;
    /** @var string */
    public string $output_port_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}