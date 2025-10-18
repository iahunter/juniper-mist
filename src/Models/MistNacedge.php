<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MistNacedge
 */
class MistNacedge extends BaseModel
{
    /** @var integer */
    public int $auth_ttl;
    /** @var string */
    public string $default_dot1x_vlan;
    /** @var string */
    public string $default_vlan;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $mxedge_hosts;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}