<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RfTemplate
 */
class RfTemplate extends BaseModel
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
    /** @var string */
    public string $country_code;
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var object */
    public $model_specific;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var boolean */
    public bool $scanning_enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}