<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookNacAccountingEvent extends BaseModel
{
    public string $ap;
    public $auth_type;
    public string $bssid;
    public string $client_ip;
    public string $client_type;
    public string $mac;
    public string $nas_vendor;
    public $org_id;
    public $rx_pkts;
    public $site_id;
    public string $ssid;
    public $timestamp;
    public $tx_pkts;
    public string $type;
    public string $username;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}