<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model InsightRogueClient
 */
class InsightRogueClient extends BaseModel
{
    /** @var string */
    public string $annotation;
    /** @var string */
    public string $ap_mac;
    /** @var number */
    public float $avg_rssi;
    /** @var string */
    public string $band;
    /** @var string */
    public string $bssid;
    /** @var string */
    public string $client_mac;
    /** @var integer */
    public int $num_aps;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}