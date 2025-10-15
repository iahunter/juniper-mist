<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsGatewayServiceStatus extends BaseModel
{
    public string $appid_install_result;
    public string $appid_install_timestamp;
    public string $appid_status;
    public int $appid_version;
    public string $ewf_status;
    public string $idp_install_result;
    public string $idp_install_timestamp;
    public string $idp_policy;
    public string $idp_status;
    public string $idp_update_timestamp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}