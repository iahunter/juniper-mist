<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApPortConfigDynamicVlan
 */
class ApPortConfigDynamicVlan extends BaseModel
{
    /** @var integer */
    public int $default_vlan_id;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $type;
    /** @var object */
    public $vlans;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}