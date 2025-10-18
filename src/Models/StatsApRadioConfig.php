<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model StatsApRadioConfig
 */
class StatsApRadioConfig extends BaseModel
{
    /** @var mixed */
    public $band_24;
    /** @var string */
    public string $band_24_usage;
    /** @var mixed */
    public $band_5;
    /** @var mixed */
    public $band_6;
    /** @var boolean */
    public bool $scanning_enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}