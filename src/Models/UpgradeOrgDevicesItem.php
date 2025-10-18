<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UpgradeOrgDevicesItem
 */
class UpgradeOrgDevicesItem extends BaseModel
{
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $site_upgrades;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}