<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsGatewayServiceStatus
 */
class StatsGatewayServiceStatus extends BaseModel
{
    /** @var string */
    public string $appid_install_result;
    /** @var string */
    public string $appid_install_timestamp;
    /** @var string */
    public string $appid_status;
    /** @var integer */
    public int $appid_version;
    /** @var string */
    public string $ewf_status;
    /** @var string */
    public string $idp_install_result;
    /** @var string */
    public string $idp_install_timestamp;
    /** @var string */
    public string $idp_policy;
    /** @var string */
    public string $idp_status;
    /** @var string */
    public string $idp_update_timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}