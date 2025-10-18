<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model DeviceOther
 */
class DeviceOther extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var string */
    public string $device_mac;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $mac;
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
    public string $state;
    /** @var string */
    public string $vendor;
    /** @var string */
    public string $vendor_api_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}