<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingGatewayMgmtOverlayIp
 */
class OrgSettingGatewayMgmtOverlayIp extends BaseModel
{
    /** @var string */
    public string $ip;
    /** @var string */
    public string $node1_ip;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}