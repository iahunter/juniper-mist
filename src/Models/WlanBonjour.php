<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanBonjour
 */
class WlanBonjour extends BaseModel
{
    /** @var mixed */
    public $additional_vlan_ids;
    /** @var boolean */
    public bool $enabled;
    /** @var object */
    public $services;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}