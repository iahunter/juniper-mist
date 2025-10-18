<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponsePastSpectrumAnalysisChannelUsage
 */
class ResponsePastSpectrumAnalysisChannelUsage extends BaseModel
{
    /** @var integer */
    public int $channel;
    /** @var number */
    public float $noise;
    /** @var number */
    public float $non_wifi;
    /** @var number */
    public float $wifi;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}