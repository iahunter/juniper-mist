<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApRadioStat
 */
class StatsApRadioStat extends BaseModel
{
    /** @var mixed */
    public $band_24;
    /** @var mixed */
    public $band_5;
    /** @var mixed */
    public $band_6;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}