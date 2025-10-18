<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UpgradeOrgDevices
 */
class UpgradeOrgDevices extends BaseModel
{
    /** @var boolean */
    public bool $all_sites;
    /** @var mixed */
    public $canary_phases;
    /** @var mixed */
    public $device_type;
    /** @var mixed */
    public $download_strategy;
    /** @var mixed */
    public $max_failure_percentage;
    /** @var mixed */
    public $max_failures;
    /** @var mixed */
    public $models;
    /** @var integer */
    public int $p2p_cluster_size;
    /** @var integer */
    public int $p2p_parallelism;
    /** @var integer */
    public int $reboot_at;
    /** @var string */
    public string $reboot_datetime;
    /** @var mixed */
    public $reboot_strategy;
    /** @var integer */
    public int $rrm_first_batch_percentage;
    /** @var integer */
    public int $rrm_max_batch_percentage;
    /** @var mixed */
    public $rrm_mesh_upgrade;
    /** @var mixed */
    public $rrm_node_order;
    /** @var boolean */
    public bool $rrm_slow_ramp;
    /** @var mixed */
    public $rules;
    /** @var mixed */
    public $site_ids;
    /** @var boolean */
    public bool $snapshot;
    /** @var string */
    public string $start_datetime;
    /** @var integer */
    public int $start_time;
    /** @var mixed */
    public $strategy;
    /** @var mixed */
    public $versions;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}