<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstNacEvent extends BaseModel
{
    public string $ap;
    public string $bssid;
    public string $cert_cn;
    public int $cert_expiry;
    public string $cert_issuer;
    public $cert_san_upn;
    public string $cert_serial;
    public string $cert_subject;
    public string $eap_type;
    public string $nas_vendor;
    public $org_id;
    public bool $random_mac;
    public $site_id;
    public string $ssid;
    public $timestamp;
    public string $type;
    public string $username;
    public string $wcid;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}