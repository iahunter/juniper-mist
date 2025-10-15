<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsMxtunnel extends BaseModel
{
    public string $ap;
    public bool $for_site;
    public $fwupdate;
    public $last_seen;
    public int $mtu;
    public string $mxcluster_id;
    public string $mxedge_id;
    public string $mxtunnel_id;
    public $org_id;
    public string $peer_mxedge_id;
    public string $remote_ip;
    public int $remote_port;
    public int $rx_control_pkts;
    public $sessions;
    public $site_id;
    public $state;
    public int $tx_control_pkts;
    public int $uptime;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}