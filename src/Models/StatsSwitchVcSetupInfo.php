<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsSwitchVcSetupInfo extends BaseModel
{
    public string $config_type;
    public string $current_stats;
    public bool $err_missing_dev_id_fpc;
    public float $last_update;
    public float $request_time;
    public string $request_type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}