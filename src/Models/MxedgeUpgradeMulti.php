<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeUpgradeMulti
 */
class MxedgeUpgradeMulti extends BaseModel
{
    /** @var mixed */
    public $allow_downgrades;
    /** @var mixed */
    public $canary_phases;
    /** @var mixed */
    public $channel;
    /** @var string */
    public string $distro;
    /** @var integer */
    public int $max_failure_percentage;
    /** @var mixed */
    public $mxedge_ids;
    /** @var integer */
    public int $start_time;
    /** @var mixed */
    public $strategy;
    /** @var mixed */
    public $versions;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}