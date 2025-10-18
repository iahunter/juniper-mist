<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ServicePolicy
 */
class ServicePolicy extends BaseModel
{
    /** @var mixed */
    public $action;
    /** @var mixed */
    public $antivirus;
    /** @var mixed */
    public $appqoe;
    /** @var mixed */
    public $ewf;
    /** @var mixed */
    public $idp;
    /** @var boolean */
    public bool $local_routing;
    /** @var string */
    public string $name;
    /** @var string */
    public string $path_preference;
    /** @var mixed */
    public $secintel;
    /** @var string */
    public string $servicepolicy_id;
    /** @var mixed */
    public $services;
    /** @var mixed */
    public $ssl_proxy;
    /** @var mixed */
    public $tenants;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}