<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SwitchPortUsageStormControl
 */
class SwitchPortUsageStormControl extends BaseModel
{
    /** @var boolean */
    public bool $disable_port;
    /** @var boolean */
    public bool $no_broadcast;
    /** @var boolean */
    public bool $no_multicast;
    /** @var boolean */
    public bool $no_registered_multicast;
    /** @var boolean */
    public bool $no_unknown_unicast;
    /** @var integer */
    public int $percentage;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}