<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class GatewayPortMirroringPortMirror extends BaseModel
{
    public string $family_type;
    public $ingress_port_ids;
    public string $output_port_id;
    public int $rate;
    public int $run_length;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}