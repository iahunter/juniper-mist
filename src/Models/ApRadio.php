<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ApRadio
 */
class ApRadio extends BaseModel
{
    /** @var boolean */
    public bool $allow_rrm_disable;
    /** @var integer */
    public int $ant_gain_24;
    /** @var integer */
    public int $ant_gain_5;
    /** @var integer */
    public int $ant_gain_6;
    /** @var mixed */
    public $ant_mode;
    /** @var mixed */
    public $antenna_mode;
    /** @var mixed */
    public $band_24;
    /** @var mixed */
    public $band_24_usage;
    /** @var mixed */
    public $band_5;
    /** @var mixed */
    public $band_5_on_24_radio;
    /** @var mixed */
    public $band_6;
    /** @var boolean */
    public bool $full_automatic_rrm;
    /** @var boolean */
    public bool $indoor_use;
    /** @var boolean */
    public bool $scanning_enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}