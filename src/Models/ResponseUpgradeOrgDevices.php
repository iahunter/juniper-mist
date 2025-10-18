<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseUpgradeOrgDevices
 */
class ResponseUpgradeOrgDevices extends BaseModel
{
    /** @var boolean */
    public bool $enable_p2p;
    /** @var boolean */
    public bool $force;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $strategy;
    /** @var string */
    public string $target_version;
    /** @var mixed */
    public $upgrades;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}