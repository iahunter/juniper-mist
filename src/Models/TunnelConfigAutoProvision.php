<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TunnelConfigAutoProvision
 */
class TunnelConfigAutoProvision extends BaseModel
{
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $latlng;
    /** @var mixed */
    public $primary;
    /** @var mixed */
    public $provider;
    /** @var string */
    public string $region;
    /** @var mixed */
    public $secondary;
    /** @var string */
    public string $service_connection;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}