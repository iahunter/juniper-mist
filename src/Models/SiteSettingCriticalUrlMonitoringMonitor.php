<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingCriticalUrlMonitoringMonitor
 */
class SiteSettingCriticalUrlMonitoringMonitor extends BaseModel
{
    /** @var string */
    public string $url;
    /** @var mixed */
    public $vlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}