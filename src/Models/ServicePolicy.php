<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ServicePolicy extends BaseModel
{
    public $action;
    public $antivirus;
    public $appqoe;
    public $ewf;
    public $idp;
    public bool $local_routing;
    public string $name;
    public string $path_preference;
    public $secintel;
    public string $servicepolicy_id;
    public $services;
    public $ssl_proxy;
    public $tenants;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}