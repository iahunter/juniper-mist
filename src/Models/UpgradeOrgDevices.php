<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UpgradeOrgDevices extends BaseModel
{
    public bool $all_sites;
    public $canary_phases;
    public $device_type;
    public $download_strategy;
    public $max_failure_percentage;
    public $max_failures;
    public $models;
    public int $p2p_cluster_size;
    public int $p2p_parallelism;
    public int $reboot_at;
    public string $reboot_datetime;
    public $reboot_strategy;
    public int $rrm_first_batch_percentage;
    public int $rrm_max_batch_percentage;
    public $rrm_mesh_upgrade;
    public $rrm_node_order;
    public bool $rrm_slow_ramp;
    public $rules;
    public $site_ids;
    public bool $snapshot;
    public string $start_datetime;
    public int $start_time;
    public $strategy;
    public $versions;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}