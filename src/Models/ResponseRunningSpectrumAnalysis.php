<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseRunningSpectrumAnalysis
 */
class ResponseRunningSpectrumAnalysis extends BaseModel
{
    /** @var string */
    public string $band;
    /** @var string */
    public string $device_id;
    /** @var integer */
    public int $duration;
    /** @var string */
    public string $format;
    /** @var integer */
    public int $started_time;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}