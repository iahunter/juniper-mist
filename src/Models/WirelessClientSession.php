<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WirelessClientSession
 */
class WirelessClientSession extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $band;
    /** @var string */
    public string $client_manufacture;
    /** @var integer */
    public int $connect;
    /** @var integer */
    public int $disconnect;
    /** @var number */
    public float $duration;
    /** @var boolean */
    public bool $for_site;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $tags;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}