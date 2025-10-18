<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseAutoOrientationInfo
 */
class ResponseAutoOrientationInfo extends BaseModel
{
    /** @var number */
    public float $est_time_left;
    /** @var number */
    public float $start_time;
    /** @var mixed */
    public $status;
    /** @var number */
    public float $stop_time;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}