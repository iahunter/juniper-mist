<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingGatewayMgmt
 */
class OrgSettingGatewayMgmt extends BaseModel
{
    /** @var mixed */
    public $app_probing;
    /** @var boolean */
    public bool $app_usage;
    /** @var boolean */
    public bool $fips_enabled;
    /** @var mixed */
    public $host_in_policies;
    /** @var mixed */
    public $host_out_policies;
    /** @var mixed */
    public $overlay_ip;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}