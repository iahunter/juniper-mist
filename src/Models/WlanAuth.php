<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WlanAuth extends BaseModel
{
    public int $anticlog_threshold;
    public bool $eap_reauth;
    public bool $enable_mac_auth;
    public int $key_idx;
    public $keys;
    public bool $multi_psk_only;
    public $owe;
    public $pairwise;
    public bool $private_wlan;
    public string $psk;
    public $type;
    public bool $wep_as_secondary_auth;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}