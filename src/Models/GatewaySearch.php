<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class GatewaySearch extends BaseModel
{
    public bool $clustered;
    public bool $evpn_missing_links;
    public string $evpntopo_id;
    public string $ext_ip;
    public $hostname;
    public string $ip;
    public string $last_config_status;
    public string $last_hostname;
    public string $last_trouble_code;
    public int $last_trouble_timestamp;
    public string $mac;
    public bool $managed;
    public string $model;
    public string $node;
    public string $node0_mac;
    public string $node1_mac;
    public int $num_members;
    public $org_id;
    public string $role;
    public $site_id;
    public string $t128agent_version;
    public bool $time_drifted;
    public $timestamp;
    public $type;
    public int $uptime;
    public string $version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}