<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponsePastSpectrumAnalysisFftSample
 */
class ResponsePastSpectrumAnalysisFftSample extends BaseModel
{
    /** @var number */
    public float $frequency;
    /** @var number */
    public float $rssi;
    /** @var number */
    public float $signal7;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}