<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ServiceStatProperty extends BaseModel
{
    public string $ash_version;
    public string $cia_version;
    public string $ember_version;
    public string $ipsec_client_version;
    public string $mist_agent_version;
    public string $package_version;
    public string $testing_tools_version;
    public string $wheeljack_version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}