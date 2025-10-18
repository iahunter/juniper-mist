<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookSdkclientScanDataEvent
 */
class WebhookSdkclientScanDataEvent extends BaseModel
{
    /** @var string */
    public string $connection_ap;
    /** @var string */
    public string $connection_band;
    /** @var string */
    public string $connection_bssid;
    /** @var integer */
    public int $connection_channel;
    /** @var number */
    public float $connection_rssi;
    /** @var mixed */
    public $last_seen;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $scan_data;
    /** @var mixed */
    public $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}