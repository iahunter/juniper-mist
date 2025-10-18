<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SpectrumAnalysis
 */
class SpectrumAnalysis extends BaseModel
{
    /** @var mixed */
    public $band;
    /** @var string */
    public string $device_id;
    /** @var integer */
    public int $duration;
    /** @var mixed */
    public $format;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}