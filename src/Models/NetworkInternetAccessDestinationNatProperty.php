<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NetworkInternetAccessDestinationNatProperty
 */
class NetworkInternetAccessDestinationNatProperty extends BaseModel
{
    /** @var string */
    public string $internal_ip;
    /** @var string */
    public string $name;
    /** @var string */
    public string $port;
    /** @var string */
    public string $wan_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}