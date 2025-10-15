<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class BgpStats extends BaseModel
{
    public bool $evpn_overlay;
    public bool $for_overlay;
    public $local_as;
    public string $mac;
    public string $model;
    public string $neighbor;
    public $neighbor_as;
    public string $neighbor_mac;
    public string $node;
    public $org_id;
    public $rx_pkts;
    public int $rx_routes;
    public $site_id;
    public $state;
    public $timestamp;
    public $tx_pkts;
    public int $tx_routes;
    public bool $up;
    public int $uptime;
    public string $vrf_name;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}