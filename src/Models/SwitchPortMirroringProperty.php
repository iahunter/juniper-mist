<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SwitchPortMirroringProperty extends BaseModel
{
    public $input_networks_ingress;
    public $input_port_ids_egress;
    public $input_port_ids_ingress;
    public string $output_ip_address;
    public string $output_network;
    public string $output_port_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}