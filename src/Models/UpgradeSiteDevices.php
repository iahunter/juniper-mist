<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UpgradeSiteDevices extends BaseModel
{
    public $canary_phases;
    public $device_ids;
    public bool $enable_p2p;
    public bool $force;
    public $max_failure_percentage;
    public $max_failures;
    public $models;
    public int $p2p_cluster_size;
    public int $p2p_parallelism;
    public bool $reboot;
    public int $reboot_at;
    public int $rrm_first_batch_percentage;
    public int $rrm_max_batch_percentage;
    public $rrm_mesh_upgrade;
    public $rrm_node_order;
    public bool $rrm_slow_ramp;
    public $rules;
    public bool $snapshot;
    public int $start_time;
    public $strategy;
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