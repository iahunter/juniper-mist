<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsWanClient extends BaseModel
{
    public float $dhcp_expire_time;
    public float $dhcp_start_time;
    public $hostname;
    public $ip;
    public string $ip_src;
    public string $last_hostname;
    public string $last_ip;
    public string $mfg;
    public string $network;
    public $org_id;
    public $site_id;
    public $timestamp;
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