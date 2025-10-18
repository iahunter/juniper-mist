<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RrmConsideration
 */
class RrmConsideration extends BaseModel
{
    /** @var integer */
    public int $channel;
    /** @var number */
    public float $noise;
    /** @var number */
    public float $other_rssi;
    /** @var string */
    public string $other_ssid;
    /** @var number */
    public float $util_score;
    /** @var number */
    public float $util_score_non_wifi;
    /** @var number */
    public float $util_score_other;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}