<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponsePastSpectrumAnalysisResult extends BaseModel
{
    public string $band;
    public $channel_usage;
    public $fft_samples;
    public string $mac;
    public $org_id;
    public int $timestamp;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}