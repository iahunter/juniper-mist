<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RfTemplateModelSpecificProperty
 */
class RfTemplateModelSpecificProperty extends BaseModel
{
    /** @var integer */
    public int $ant_gain_24;
    /** @var integer */
    public int $ant_gain_5;
    /** @var integer */
    public int $ant_gain_6;
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

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}