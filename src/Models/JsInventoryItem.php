<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model JsInventoryItem
 */
class JsInventoryItem extends BaseModel
{
    /** @var string */
    public string $device_name;
    /** @var integer */
    public int $eol_time;
    /** @var integer */
    public int $eos_time;
    /** @var boolean */
    public bool $master;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $serial;
    /** @var string */
    public string $sku;
    /** @var string */
    public string $status;
    /** @var string */
    public string $suggested_version;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $version;
    /** @var integer */
    public int $version_eos_time;
    /** @var integer */
    public int $version_time;
    /** @var string */
    public string $warranty;
    /** @var integer */
    public int $warranty_time;
    /** @var mixed */
    public $warranty_type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}