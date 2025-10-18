<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UpgradeOrgDevicesUpgrade
 */
class UpgradeOrgDevicesUpgrade extends BaseModel
{
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $upgrade;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}