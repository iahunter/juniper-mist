<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ServiceStatProperty
 */
class ServiceStatProperty extends BaseModel
{
    /** @var string */
    public string $ash_version;
    /** @var string */
    public string $cia_version;
    /** @var string */
    public string $ember_version;
    /** @var string */
    public string $ipsec_client_version;
    /** @var string */
    public string $mist_agent_version;
    /** @var string */
    public string $package_version;
    /** @var string */
    public string $testing_tools_version;
    /** @var string */
    public string $wheeljack_version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}