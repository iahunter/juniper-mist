<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponsePastSpectrumAnalysisResult
 */
class ResponsePastSpectrumAnalysisResult extends BaseModel
{
    /** @var string */
    public string $band;
    /** @var mixed */
    public $channel_usage;
    /** @var mixed */
    public $fft_samples;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}