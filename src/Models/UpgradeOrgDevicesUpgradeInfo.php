<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UpgradeOrgDevicesUpgradeInfo
 */
class UpgradeOrgDevicesUpgradeInfo extends BaseModel
{
    /** @var mixed */
    public $id;
    /** @var integer */
    public int $start_time;
    /** @var mixed */
    public $status;
    /** @var mixed */
    public $targets;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}