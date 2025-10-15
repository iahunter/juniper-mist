<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MxedgeUpgradeMulti extends BaseModel
{
    public $allow_downgrades;
    public $canary_phases;
    public $channel;
    public string $distro;
    public int $max_failure_percentage;
    public $mxedge_ids;
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