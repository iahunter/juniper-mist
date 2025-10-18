<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UpgradeOrgDevicesItemSiteUpgrade
 */
class UpgradeOrgDevicesItemSiteUpgrade extends BaseModel
{
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $upgrade_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}