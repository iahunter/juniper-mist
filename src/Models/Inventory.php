<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Inventory
 */
class Inventory extends BaseModel
{
    /** @var boolean */
    public bool $adopted;
    /** @var string */
    public string $chassis_mac;
    /** @var string */
    public string $chassis_serial;
    /** @var boolean */
    public bool $connected;
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $deviceprofile_id;
    /** @var string */
    public string $hostname;
    /** @var string */
    public string $hw_rev;
    /** @var mixed */
    public $id;
    /** @var boolean */
    public bool $jsi;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $magic;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $sku;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $vc_mac;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}