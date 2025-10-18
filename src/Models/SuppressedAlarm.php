<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SuppressedAlarm
 */
class SuppressedAlarm extends BaseModel
{
    /** @var mixed */
    public $applies;
    /** @var number */
    public float $duration;
    /** @var integer */
    public int $scheduled_time;
    /** @var mixed */
    public $scope;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}