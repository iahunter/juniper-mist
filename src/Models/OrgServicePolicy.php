<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgServicePolicy extends BaseModel
{
    public $aamw;
    public $action;
    public $antivirus;
    public $appqoe;
    public $created_time;
    public $ewf;
    public $id;
    public $idp;
    public bool $local_routing;
    public $modified_time;
    public string $name;
    public $org_id;
    public string $path_preference;
    public $secintel;
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