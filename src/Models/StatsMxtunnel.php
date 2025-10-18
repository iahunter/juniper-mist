<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsMxtunnel
 */
class StatsMxtunnel extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $fwupdate;
    /** @var mixed */
    public $last_seen;
    /** @var integer */
    public int $mtu;
    /** @var string */
    public string $mxcluster_id;
    /** @var string */
    public string $mxedge_id;
    /** @var string */
    public string $mxtunnel_id;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $peer_mxedge_id;
    /** @var string */
    public string $remote_ip;
    /** @var integer */
    public int $remote_port;
    /** @var integer */
    public int $rx_control_pkts;
    /** @var mixed */
    public $sessions;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $state;
    /** @var integer */
    public int $tx_control_pkts;
    /** @var integer */
    public int $uptime;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}