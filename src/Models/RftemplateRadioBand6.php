<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RftemplateRadioBand6
 */
class RftemplateRadioBand6 extends BaseModel
{
    /** @var boolean */
    public bool $allow_rrm_disable;
    /** @var integer */
    public int $ant_gain;
    /** @var mixed */
    public $antenna_mode;
    /** @var mixed */
    public $bandwidth;
    /** @var mixed */
    public $channels;
    /** @var boolean */
    public bool $disabled;
    /** @var integer */
    public int $power;
    /** @var integer */
    public int $power_max;
    /** @var integer */
    public int $power_min;
    /** @var mixed */
    public $preamble;
    /** @var boolean */
    public bool $standard_power;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}