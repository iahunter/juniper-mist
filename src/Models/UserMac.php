<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UserMac
 */
class UserMac extends BaseModel
{
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $labels;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $name;
    /** @var string */
    public string $notes;
    /** @var string */
    public string $radius_group;
    /** @var string */
    public string $vlan;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}