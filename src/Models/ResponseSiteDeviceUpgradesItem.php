<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseSiteDeviceUpgradesItem
 */
class ResponseSiteDeviceUpgradesItem extends BaseModel
{
    /** @var mixed */
    public $counts;
    /** @var integer */
    public int $current_phase;
    /** @var boolean */
    public bool $enable_p2p;
    /** @var boolean */
    public bool $force;
    /** @var mixed */
    public $id;
    /** @var integer */
    public int $max_failure_percentage;
    /** @var mixed */
    public $max_failures;
    /** @var integer */
    public int $reboot_at;
    /** @var integer */
    public int $start_time;
    /** @var mixed */
    public $status;
    /** @var mixed */
    public $strategy;
    /** @var string */
    public string $target_version;
    /** @var object */
    public $upgrade_plan;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}