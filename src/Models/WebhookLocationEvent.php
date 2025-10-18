<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookLocationEvent
 */
class WebhookLocationEvent extends BaseModel
{
    /** @var integer */
    public int $battery_voltage;
    /** @var string */
    public string $eddystone_uid_instance;
    /** @var string */
    public string $eddystone_uid_namespace;
    /** @var string */
    public string $eddystone_url_url;
    /** @var integer */
    public int $ibeacon_major;
    /** @var integer */
    public int $ibeacon_minor;
    /** @var string */
    public string $ibeacon_uuid;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var integer */
    public int $mfg_company_id;
    /** @var string */
    public string $mfg_data;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;
    /** @var mixed */
    public $wifi_beacon_extended_info;
    /** @var number */
    public float $x;
    /** @var number */
    public float $y;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}