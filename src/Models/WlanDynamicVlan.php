<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanDynamicVlan
 */
class WlanDynamicVlan extends BaseModel
{
    /** @var mixed */
    public $default_vlan_id;
    /** @var mixed */
    public $default_vlan_ids;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $local_vlan_ids;
    /** @var mixed */
    public $type;
    /** @var object */
    public $vlans;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}