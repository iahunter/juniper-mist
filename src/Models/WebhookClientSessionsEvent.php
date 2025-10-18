<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookClientSessionsEvent
 */
class WebhookClientSessionsEvent extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $ap_name;
    /** @var string */
    public string $band;
    /** @var string */
    public string $bssid;
    /** @var string */
    public string $client_family;
    /** @var string */
    public string $client_manufacture;
    /** @var string */
    public string $client_model;
    /** @var string */
    public string $client_os;
    /** @var integer */
    public int $connect;
    /** @var number */
    public float $connect_float;
    /** @var integer */
    public int $disconnect;
    /** @var number */
    public float $disconnect_float;
    /** @var integer */
    public int $duration;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $next_ap;
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
    /** @var integer */
    public int $termination_reason;
    /** @var mixed */
    public $timestamp;
    /** @var number */
    public float $version;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}