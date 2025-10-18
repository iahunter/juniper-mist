<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NetworkMulticast
 */
class NetworkMulticast extends BaseModel
{
    /** @var boolean */
    public bool $disable_igmp;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $groups;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}