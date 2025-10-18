<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApUsbStat
 */
class StatsApUsbStat extends BaseModel
{
    /** @var integer */
    public int $channel;
    /** @var boolean */
    public bool $connected;
    /** @var integer */
    public int $last_activity;
    /** @var string */
    public string $type;
    /** @var boolean */
    public bool $up;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}