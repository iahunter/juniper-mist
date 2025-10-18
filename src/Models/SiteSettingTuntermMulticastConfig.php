<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteSettingTuntermMulticastConfig
 */
class SiteSettingTuntermMulticastConfig extends BaseModel
{
    /** @var mixed */
    public $mdns;
    /** @var boolean */
    public bool $multicast_all;
    /** @var mixed */
    public $ssdp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}