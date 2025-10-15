<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteWifi extends BaseModel
{
    public bool $cisco_enabled;
    public bool $disable_11k;
    public bool $disable_radios_when_power_constrained;
    public bool $enable_arp_spoof_check;
    public bool $enable_shared_radio_scanning;
    public bool $enabled;
    public bool $locate_connected;
    public bool $locate_unconnected;
    public bool $mesh_allow_dfs;
    public bool $mesh_enable_crm;
    public bool $mesh_enabled;
    public string $mesh_psk;
    public string $mesh_ssid;
    public $proxy_arp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}