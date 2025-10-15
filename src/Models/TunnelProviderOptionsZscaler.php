<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class TunnelProviderOptionsZscaler extends BaseModel
{
    public bool $aup_block_internet_until_accepted;
    public bool $aup_enabled;
    public bool $aup_force_ssl_inspection;
    public int $aup_timeout_in_days;
    public bool $auth_required;
    public bool $caution_enabled;
    public float $dn_bandwidth;
    public int $idle_time_in_minutes;
    public bool $ofw_enabled;
    public $sub_locations;
    public bool $surrogate_IP;
    public bool $surrogate_IP_enforced_for_known_browsers;
    public int $surrogate_refresh_time_in_minutes;
    public float $up_bandwidth;
    public bool $xff_forward_enabled;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}