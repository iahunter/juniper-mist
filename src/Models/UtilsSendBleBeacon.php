<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsSendBleBeacon
 */
class UtilsSendBleBeacon extends BaseModel
{
    /** @var string */
    public string $beacon_frame;
    /** @var integer */
    public int $beacon_freq;
    /** @var integer */
    public int $duration;
    /** @var mixed */
    public $macs;
    /** @var mixed */
    public $map_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}