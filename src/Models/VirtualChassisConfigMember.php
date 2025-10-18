<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model VirtualChassisConfigMember
 */
class VirtualChassisConfigMember extends BaseModel
{
    /** @var boolean */
    public bool $locating;
    /** @var string */
    public string $mac;
    /** @var integer */
    public int $member_id;
    /** @var mixed */
    public $vc_ports;
    /** @var mixed */
    public $vc_role;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}