<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseVirtualChassisConfig
 */
class ResponseVirtualChassisConfig extends BaseModel
{
    /** @var string */
    public string $config_type;
    /** @var mixed */
    public $id;
    /** @var boolean */
    public bool $locating;
    /** @var mixed */
    public $members;
    /** @var string */
    public string $model;
    /** @var integer */
    public int $num_routing_engines;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $status;
    /** @var string */
    public string $vc_mac;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}