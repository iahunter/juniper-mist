<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookClientJoinEvent
 */
class WebhookClientJoinEvent extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $ap_name;
    /** @var string */
    public string $band;
    /** @var string */
    public string $bssid;
    /** @var integer */
    public int $connect;
    /** @var number */
    public float $connect_float;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var number */
    public float $rssi;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $site_name;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $timestamp;
    /** @var number */
    public float $version;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}