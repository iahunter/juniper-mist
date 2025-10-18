<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsSwitchVcSetupInfo
 */
class StatsSwitchVcSetupInfo extends BaseModel
{
    /** @var string */
    public string $config_type;
    /** @var string */
    public string $current_stats;
    /** @var boolean */
    public bool $err_missing_dev_id_fpc;
    /** @var number */
    public float $last_update;
    /** @var number */
    public float $request_time;
    /** @var string */
    public string $request_type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}