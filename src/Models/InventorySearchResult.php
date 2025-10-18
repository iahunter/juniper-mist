<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model InventorySearchResult
 */
class InventorySearchResult extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var boolean */
    public bool $master;
    /** @var mixed */
    public $members;
    /** @var string */
    public string $model;
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
    /** @var string */
    public string $status;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $vc_mac;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}