<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SiteWifi
 */
class SiteWifi extends BaseModel
{
    /** @var boolean */
    public bool $cisco_enabled;
    /** @var boolean */
    public bool $disable_11k;
    /** @var boolean */
    public bool $disable_radios_when_power_constrained;
    /** @var boolean */
    public bool $enable_arp_spoof_check;
    /** @var boolean */
    public bool $enable_shared_radio_scanning;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $locate_connected;
    /** @var boolean */
    public bool $locate_unconnected;
    /** @var boolean */
    public bool $mesh_allow_dfs;
    /** @var boolean */
    public bool $mesh_enable_crm;
    /** @var boolean */
    public bool $mesh_enabled;
    /** @var string */
    public string $mesh_psk;
    /** @var string */
    public string $mesh_ssid;
    /** @var mixed */
    public $proxy_arp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}