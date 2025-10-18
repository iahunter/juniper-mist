<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model InventoryUpdate
 */
class InventoryUpdate extends BaseModel
{
    /** @var boolean */
    public bool $disable_auto_config;
    /** @var mixed */
    public $macs;
    /** @var boolean */
    public bool $managed;
    /** @var boolean */
    public bool $no_reassign;
    /** @var mixed */
    public $op;
    /** @var mixed */
    public $serials;
    /** @var string */
    public string $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}