<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseAutoPlacementInfo
 */
class ResponseAutoPlacementInfo extends BaseModel
{
    /** @var number */
    public float $end_time;
    /** @var number */
    public float $est_time_left;
    /** @var integer */
    public int $start_time;
    /** @var mixed */
    public $status;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}