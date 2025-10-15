<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class BgpConfig extends BaseModel
{
    public string $auth_key;
    public int $bfd_minimum_interval;
    public int $bfd_multiplier;
    public bool $disable_bfd;
    public string $export;
    public string $export_policy;
    public bool $extended_v4_nexthop;
    public int $graceful_restart_time;
    public int $hold_time;
    public string $import;
    public string $import_policy;
    public $local_as;
    public $neighbor_as;
    public array $neighbors;
    public $networks;
    public bool $no_private_as;
    public bool $no_readvertise_to_overlay;
    public string $tunnel_name;
    public $type;
    public $via;
    public string $vpn_name;
    public string $wan_name;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}