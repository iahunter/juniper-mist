<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookDiscoveredRawRssiEvent
 */
class WebhookDiscoveredRawRssiEvent extends BaseModel
{
    /** @var mixed */
    public $ap_loc;
    /** @var integer */
    public int $beam;
    /** @var string */
    public string $device_id;
    /** @var integer */
    public int $ibeacon_major;
    /** @var integer */
    public int $ibeacon_minor;
    /** @var string */
    public string $ibeacon_uuid;
    /** @var boolean */
    public bool $is_asset;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $mfg_company_id;
    /** @var string */
    public string $mfg_data;
    /** @var mixed */
    public $org_id;
    /** @var number */
    public float $rssi;
    /** @var mixed */
    public $service_packets;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}