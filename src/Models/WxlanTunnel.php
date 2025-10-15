<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WxlanTunnel extends BaseModel
{
    public $created_time;
    public $dmvpn;
    public bool $for_mgmt;
    public bool $for_site;
    public int $hello_interval;
    public int $hello_retries;
    public string $hostname;
    public $id;
    public $ipsec;
    public bool $is_static;
    public $modified_time;
    public int $mtu;
    public string $name;
    public $org_id;
    public $peers;
    public string $router_id;
    public string $secret;
    public $sessions;
    public $site_id;
    public int $udp_port;
    public bool $use_udp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}