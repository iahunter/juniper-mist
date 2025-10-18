<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingVpnOptions
 */
class OrgSettingVpnOptions extends BaseModel
{
    /** @var integer */
    public int $as_base;
    /** @var boolean */
    public bool $enable_ipv6;
    /** @var string */
    public string $st_subnet;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}