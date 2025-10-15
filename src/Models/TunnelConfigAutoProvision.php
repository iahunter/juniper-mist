<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class TunnelConfigAutoProvision extends BaseModel
{
    public bool $enabled;
    public $latlng;
    public $primary;
    public $provider;
    public string $region;
    public $secondary;
    public string $service_connection;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}