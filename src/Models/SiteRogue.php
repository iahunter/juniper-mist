<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SiteRogue extends BaseModel
{
    public $allowed_vlan_ids;
    public bool $enabled;
    public bool $honeypot_enabled;
    public int $min_duration;
    public int $min_rogue_duration;
    public int $min_rogue_rssi;
    public int $min_rssi;
    public $whitelisted_bssids;
    public $whitelisted_ssids;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}