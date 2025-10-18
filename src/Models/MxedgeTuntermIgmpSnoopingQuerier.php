<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeTuntermIgmpSnoopingQuerier
 */
class MxedgeTuntermIgmpSnoopingQuerier extends BaseModel
{
    /** @var integer */
    public int $max_response_time;
    /** @var integer */
    public int $mtu;
    /** @var integer */
    public int $query_interval;
    /** @var integer */
    public int $robustness;
    /** @var integer */
    public int $version;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}