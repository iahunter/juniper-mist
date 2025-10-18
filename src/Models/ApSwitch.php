<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApSwitch
 */
class ApSwitch extends BaseModel
{
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $eth0;
    /** @var mixed */
    public $eth1;
    /** @var mixed */
    public $eth2;
    /** @var mixed */
    public $eth3;
    /** @var mixed */
    public $module;
    /** @var mixed */
    public $wds;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}