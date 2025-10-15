<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UtilsShowForwardingTable extends BaseModel
{
    public $node;
    public string $prefix;
    public string $service_ip;
    public string $service_name;
    public int $service_port;
    public string $service_protocol;
    public string $service_tenant;
    public string $vrf;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}