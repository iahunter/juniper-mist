<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeUpgradeMultiAllowDowngrades
 */
class MxedgeUpgradeMultiAllowDowngrades extends BaseModel
{
    /** @var boolean */
    public bool $mxagent;
    /** @var boolean */
    public bool $mxdas;
    /** @var boolean */
    public bool $mxocproxy;
    /** @var boolean */
    public bool $radsecproxy;
    /** @var boolean */
    public bool $tunterm;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}