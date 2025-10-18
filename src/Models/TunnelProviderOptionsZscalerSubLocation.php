<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TunnelProviderOptionsZscalerSubLocation
 */
class TunnelProviderOptionsZscalerSubLocation extends BaseModel
{
    /** @var boolean */
    public bool $aup_block_internet_until_accepted;
    /** @var boolean */
    public bool $aup_enabled;
    /** @var boolean */
    public bool $aup_force_ssl_inspection;
    /** @var integer */
    public int $aup_timeout_in_days;
    /** @var boolean */
    public bool $auth_required;
    /** @var boolean */
    public bool $caution_enabled;
    /** @var number */
    public float $dn_bandwidth;
    /** @var integer */
    public int $idle_time_in_minutes;
    /** @var string */
    public string $name;
    /** @var boolean */
    public bool $ofw_enabled;
    /** @var boolean */
    public bool $surrogate_IP;
    /** @var boolean */
    public bool $surrogate_IP_enforced_for_known_browsers;
    /** @var integer */
    public int $surrogate_refresh_time_in_minutes;
    /** @var number */
    public float $up_bandwidth;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}