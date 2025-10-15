<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseSiteDeviceUpgrade extends BaseModel
{
    public int $current_phase;
    public bool $enable_p2p;
    public bool $force;
    public $id;
    public int $max_failure_percentage;
    public $max_failures;
    public int $reboot_at;
    public int $start_time;
    public $status;
    public $strategy;
    public string $target_version;
    public $targets;
    public $upgrade_plan;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}