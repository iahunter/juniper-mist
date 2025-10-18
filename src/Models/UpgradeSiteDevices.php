<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UpgradeSiteDevices
 */
class UpgradeSiteDevices extends BaseModel
{
    /** @var mixed */
    public $canary_phases;
    /** @var mixed */
    public $device_ids;
    /** @var boolean */
    public bool $enable_p2p;
    /** @var boolean */
    public bool $force;
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
    /** @var boolean */
    public bool $reboot;
    /** @var integer */
    public int $reboot_at;
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
    /** @var boolean */
    public bool $snapshot;
    /** @var integer */
    public int $start_time;
    /** @var mixed */
    public $strategy;
    /** @var string */
    public string $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}